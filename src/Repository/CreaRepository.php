<?php

namespace App\Repository;

use App\Entity\Crea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Crea|null find($id, $lockMode = null, $lockVersion = null)
 * @method Crea|null findOneBy(array $criteria, array $orderBy = null)
 * @method Crea[]    findAll()
 * @method Crea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Crea::class);
    }

    // /**
    //  * @return Crea[] Returns an array of Crea objects
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
    public function findOneBySomeField($value): ?Crea
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
