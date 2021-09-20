<?php

namespace App\Repository;

use App\Entity\Booking;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Booking|null find($id, $lockMode = null, $lockVersion = null)
 * @method Booking|null findOneBy(array $criteria, array $orderBy = null)
 * @method Booking[]    findAll()
 * @method Booking[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Booking::class);
    }

    public function bookingExist($user, $trip){

       
        return $this->createQueryBuilder('booking')
        ->where('booking.trip = :trip')
        ->setParameter('trip', $trip)
        ->andWhere('booking.user = :user')
        ->setParameter('user', $user)
        ->getQuery()
        ->getOneOrNullResult()
    ;

    }


    public function bookingRemove($user, $trip){

       
        return $this->createQueryBuilder('booking')
        ->delete()
        ->where('booking.trip = :trip')
        ->setParameter('trip', $trip)
        ->andWhere('booking.user = :user')
        ->setParameter('user', $user)
        ->getQuery()
        ->getResult()
    ;

    }

    public function getAllBooker($trip){

       
        return $this->createQueryBuilder('booking')
        ->where('booking.trip = :trip')
        ->setParameter('trip', $trip)
        // ->addSelect('user')    
        // ->join('trip.driver', 'user', 'WITH', 'user = trip.driver')
        ->getQuery()
        ->getResult()
    ;

    }

    // /**
    //  * @return Booking[] Returns an array of Booking objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Booking
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
