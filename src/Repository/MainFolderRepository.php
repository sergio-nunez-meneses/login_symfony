<?php

namespace App\Repository;

use App\Entity\MainFolder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MainFolder|null find($id, $lockMode = null, $lockVersion = null)
 * @method MainFolder|null findOneBy(array $criteria, array $orderBy = null)
 * @method MainFolder[]    findAll()
 * @method MainFolder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MainFolderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MainFolder::class);
    }

    // /**
    //  * @return MainFolder[] Returns an array of MainFolder objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MainFolder
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
