<?php

namespace App\Repository;

use App\Entity\Trip;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Trip|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trip|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trip[]    findAll()
 * @method Trip[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TripRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trip::class);
    }

    // /**
    //  * @return Trip[] Returns an array of Trip objects
    //  */

    public function findOnTripWithDate($arrival, $departure, $date)
    {
        return $this->createQueryBuilder('trip')
            ->where('trip.departure = :departure')
            ->setParameter('departure', $departure)
            ->andWhere('trip.arrival = :arrival')
            ->setParameter('arrival', $arrival)
            ->andWhere('trip.date_of_trip = :date')
            ->setParameter('date', $date)
            ->orderBy('trip.startTime', 'ASC')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult()
        ;
    } 
    


        // /**
    //  * @return Trip[] Returns an array of Trip objects
    //  */

    public function findUserInfoByTrip($trip)
    {
       return $this->createQueryBuilder('trip')
       ->addSelect('driver')    
       ->join('trip.driver', 'driver', 'WITH', 'driver = trip.driver')

        ->addSelect('travel_preferences')    
        ->join('driver.travel_preferences', 'travel_preferences', 'WITH', 'travel_preferences = driver.travel_preferences')
        ->addSelect('vehicule')    
        ->join('driver.vehicule', 'vehicule', 'WITH', 'vehicule = driver.vehicule')
        ->addSelect('user_experience')    
        ->join('driver.user_experience', 'user_experience', 'WITH', 'user_experience = driver.user_experience')
            ->where('trip.id = :idTrip')
            ->setParameter('idTrip', $trip->getId())
            ->getQuery()
            ->getOneOrNullResult()
        ;
    } 

    /*
    public function findOneBySomeField($value): ?Trip
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
