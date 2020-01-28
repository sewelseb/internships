<?php

namespace App\Repository;

use App\Entity\InternshipApplication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method InternshipApplication|null find($id, $lockMode = null, $lockVersion = null)
 * @method InternshipApplication|null findOneBy(array $criteria, array $orderBy = null)
 * @method InternshipApplication[]    findAll()
 * @method InternshipApplication[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InternshipApplicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InternshipApplication::class);
    }

    // /**
    //  * @return InternshipApplication[] Returns an array of InternshipApplication objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InternshipApplication
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
