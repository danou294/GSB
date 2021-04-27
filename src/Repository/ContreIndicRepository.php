<?php

namespace App\Repository;

use App\Entity\ContreIndic;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ContreIndic|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContreIndic|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContreIndic[]    findAll()
 * @method ContreIndic[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class ContreIndicRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContreIndic::class);
    }

    // /**

    //  * @return Maladies[] Returns an array of Maladies objects

    //  * @return Test[] Returns an array of Test objects

    //  */

    public function findById($id)
    {
        return $this->createQueryBuilder('id')
            ->andWhere('id.idMedicament = :val')
            ->setParameter('val', $id)
            ->setMaxResults()
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