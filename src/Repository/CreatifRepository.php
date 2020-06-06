<?php

namespace App\Repository;

use App\Entity\Creatif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Creatif|null find($id, $lockMode = null, $lockVersion = null)
 * @method Creatif|null findOneBy(array $criteria, array $orderBy = null)
 * @method Creatif[]    findAll()
 * @method Creatif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreatifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Creatif::class);
    }

    // /**
    //  * @return Creatif[] Returns an array of Creatif objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Creatif
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
