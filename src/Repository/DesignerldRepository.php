<?php

namespace App\Repository;

use App\Entity\Designerld;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Designerld|null find($id, $lockMode = null, $lockVersion = null)
 * @method Designerld|null findOneBy(array $criteria, array $orderBy = null)
 * @method Designerld[]    findAll()
 * @method Designerld[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DesignerldRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Designerld::class);
    }

    // /**
    //  * @return Designerld[] Returns an array of Designerld objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function SearchCar($criteria)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.auteur= :auteur')
            ->setParameter('auteur', $criteria['auteur'])
            ->andWhere('c.lieu= :lieu')
            ->setParameter('lieu', $criteria['lieu'])
            ->orderBy('c.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Designerld
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
