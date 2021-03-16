<?php

namespace App\Repository;

use App\Entity\Medicament;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Medicament|null find($id, $lockMode = null, $lockVersion = null)
 * @method Medicament|null findOneBy(array $criteria, array $orderBy = null)
 * @method Medicament[]    findAll()
 * @method Medicament[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
<<<<<<< HEAD

=======
>>>>>>> fcaedf9727a6b68a13c78d2efc6815f6ff059bfa
class MedicamentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Medicament::class);
    }

    // /**
<<<<<<< HEAD
    //  * @return Maladies[] Returns an array of Maladies objects
=======
    //  * @return Test[] Returns an array of Test objects
>>>>>>> fcaedf9727a6b68a13c78d2efc6815f6ff059bfa
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
<<<<<<< HEAD
    public function findOneBySomeField($value): ?Maladies
=======
    public function findOneBySomeField($value): ?Test
>>>>>>> fcaedf9727a6b68a13c78d2efc6815f6ff059bfa
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
