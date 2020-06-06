<?php

namespace App\Repository;

use App\Entity\VideoLd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method VideoLd|null find($id, $lockMode = null, $lockVersion = null)
 * @method VideoLd|null findOneBy(array $criteria, array $orderBy = null)
 * @method VideoLd[]    findAll()
 * @method VideoLd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideoLdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VideoLd::class);
    }

    // /**
    //  * @return VideoLd[] Returns an array of VideoLd objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VideoLd
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
