<?php

namespace App\Repository;

use App\Entity\BookGenre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BookGenre>
 *
 * @method BookGenre|null find($id, $lockMode = null, $lockVersion = null)
 * @method BookGenre|null findOneBy(array $criteria, array $orderBy = null)
 * @method BookGenre[]    findAll()
 * @method BookGenre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookGenreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BookGenre::class);
    }

//    /**
//     * @return BookGenre[] Returns an array of BookGenre objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BookGenre
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
