<?php

namespace App\Repository;

use App\Entity\OccurrencesComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OccurrencesComment>
 *
 * @method OccurrencesComment|null find($id, $lockMode = null, $lockVersion = null)
 * @method OccurrencesComment|null findOneBy(array $criteria, array $orderBy = null)
 * @method OccurrencesComment[]    findAll()
 * @method OccurrencesComment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OccurrencesCommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OccurrencesComment::class);
    }

//    /**
//     * @return OccurrencesComment[] Returns an array of OccurrencesComment objects
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

//    public function findOneBySomeField($value): ?OccurrencesComment
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
