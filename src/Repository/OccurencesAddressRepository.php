<?php

namespace App\Repository;

use App\Entity\OccurencesAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OccurencesAddress>
 *
 * @method OccurencesAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method OccurencesAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method OccurencesAddress[]    findAll()
 * @method OccurencesAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OccurencesAddressRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OccurencesAddress::class);
    }

//    /**
//     * @return OccurencesAddress[] Returns an array of OccurencesAddress objects
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

//    public function findOneBySomeField($value): ?OccurencesAddress
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
