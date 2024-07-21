<?php

namespace App\Repository;

use App\Entity\OccurrencesAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OccurrencesAddress>
 *
 * @method OccurrencesAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method OccurrencesAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method OccurrencesAddress[]    findAll()
 * @method OccurrencesAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OccurrencesAddressRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OccurrencesAddress::class);
    }

//    /**
//     * @return OccurrencesAddress[] Returns an array of OccurrencesAddress objects
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

//    public function findOneBySomeField($value): ?OccurrencesAddress
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
