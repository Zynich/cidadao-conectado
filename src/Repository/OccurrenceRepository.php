<?php

namespace App\Repository;

use App\Entity\Occurrence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;

/**
 * @extends ServiceEntityRepository<Occurrence>
 *
 * @method Occurrence|null find($id, $lockMode = null, $lockVersion = null)
 * @method Occurrence|null findOneBy(array $criteria, array $orderBy = null)
 * @method Occurrence[]    findAll()
 * @method Occurrence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OccurrenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Occurrence::class);
    }

    public function findOpenOccurrencesWithAddress()
    {
        $qb = $this->createQueryBuilder('o')
            ->select('o.id', 'o.occurrenceCode', 'o.title', 'o.description', 'o.status', 'o.priority', 'o.occurredDate', 'o.slaDueDate',
                     "CONCAT(a.street, ', ', a.number, ', ', a.neighborhood, ', ', a.city, ', ', a.state, ', ', a.cep, ' ', a.complement) AS fullAddress",
                     'ot.name AS occurrenceTypeName') 
            ->innerJoin('App\Entity\OccurrencesAddress', 'oa', 'WITH', 'oa.occurrence = o.id')
            ->innerJoin('oa.address', 'a')
            ->innerJoin('o.typeOccurrence', 'ot') 
            ->where('o.occurrenceClosed = 0');

        return $qb->getQuery()->getResult();
    }

    public function findClosedOccurrences()
    {
        $qb = $this->createQueryBuilder('o')
            ->select('o.id', 'o.occurrenceCode', 'o.title', 'o.status', 'o.occurredDate','o.closedDate',
                     'ot.name AS occurrenceTypeName') 
            ->innerJoin('o.typeOccurrence', 'ot') 
            ->where('o.occurrenceClosed = 1');

        return $qb->getQuery()->getResult();
    }
}
