<?php

namespace App\Repository;

use App\Entity\TypeIndividu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method A|null find($id, $lockMode = null, $lockVersion = null)
 * @method A|null findOneBy(array $criteria, array $orderBy = null)
 * @method A[]    findAll()
 * @method A[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeIndividuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeIndividu::class);
    }

    /**
     * @return TypeIndividu[] Returns an array of A objects
     */
    public function findByTinLibelle(): array
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.tinLibelle', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?A
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
