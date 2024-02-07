<?php

namespace App\Repository;

use App\Entity\OrderBook;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrderBook>
 *
 * @method OrderBook|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrderBook|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrderBook[]    findAll()
 * @method OrderBook[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderBookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrderBook::class);
    }

//    /**
//     * @return OrderBook[] Returns an array of OrderBook objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OrderBook
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
