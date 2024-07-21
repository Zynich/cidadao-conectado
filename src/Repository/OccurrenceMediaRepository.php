<?php

namespace App\Repository;

use App\Entity\OccurrenceMedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OccurrenceMedia>
 *
 * @method OccurrenceMedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method OccurrenceMedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method OccurrenceMedia[]    findAll()
 * @method OccurrenceMedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OccurrenceMediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OccurrenceMedia::class);
    }

//    /**
//     * @return OccurrenceMedia[] Returns an array of OccurrenceMedia objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OccurrenceMedia
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
