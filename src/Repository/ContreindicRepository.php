<?php

namespace App\Repository;

use App\Entity\Contreindic;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Contreindic|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contreindic|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contreindic[]    findAll()
 * @method Contreindic[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class ContreindicRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contreindic::class);
    }

    // /**

    //  * @return Maladies[] Returns an array of Maladies objects

    //  * @return Test[] Returns an array of Test objects

    //  */

    public function findById($id)
    {
        return $this->createQueryBuilder('id')
            ->andWhere('id.idlist = :val')
            ->setParameter('val', $id)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
<<<<<<< HEAD
    public function findOneBySomeField($value): ?Maladies
=======
    public function findOneBySomeField($value): ?Test
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}