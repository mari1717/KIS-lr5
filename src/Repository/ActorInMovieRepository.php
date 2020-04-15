<?php

namespace App\Repository;

use App\Entity\ActorInMovie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ActorInMovie|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActorInMovie|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActorInMovie[]    findAll()
 * @method ActorInMovie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActorInMovieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActorInMovie::class);
    }

    // /**
    //  * @return ActorInMovie[] Returns an array of ActorInMovie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ActorInMovie
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
