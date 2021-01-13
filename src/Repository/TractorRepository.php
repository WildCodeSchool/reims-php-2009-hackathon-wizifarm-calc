<?php

namespace App\Repository;

use App\Entity\Tractor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tractor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tractor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tractor[]    findAll()
 * @method Tractor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TractorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tractor::class);
    }

    // /**
    //  * @return Tractor[] Returns an array of Tractor objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tractor
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
