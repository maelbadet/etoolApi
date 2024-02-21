<?php

namespace App\Repository;

use App\Entity\Worksite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Worksite>
 *
 * @method Worksite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Worksite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Worksite[]    findAll()
 * @method Worksite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorksiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Worksite::class);
    }

//    /**
//     * @return Worksite[] Returns an array of Worksite objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('w.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Worksite
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
