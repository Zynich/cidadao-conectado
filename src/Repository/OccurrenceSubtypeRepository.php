<?php

namespace App\Repository;

use App\Entity\OccurrenceSubtype;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OccurrenceSubtype>
 *
 * @method OccurrenceSubtype|null find($id, $lockMode = null, $lockVersion = null)
 * @method OccurrenceSubtype|null findOneBy(array $criteria, array $orderBy = null)
 * @method OccurrenceSubtype[]    findAll()
 * @method OccurrenceSubtype[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OccurrenceSubtypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OccurrenceSubtype::class);
    }

//    /**
//     * @return OccurrenceSubtype[] Returns an array of OccurrenceSubtype objects
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

//    public function findOneBySomeField($value): ?OccurrenceSubtype
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
