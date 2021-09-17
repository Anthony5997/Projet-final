<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    // /**
    //  * @return User[] Returns an array of User objects
    //  */

    public function findUserTravelPreferences($value)
    {
        return $this->createQueryBuilder('user')
        ->addSelect('travelPreferences')
        ->join('user.travel_preferences' , 'travelPreferences','WITH', 'travelPreferences = travelPreferences.id')
        ->where('user.id = :value')
        ->setParameter('value', $value)
        ->getQuery()
        ->getResult();  
        
    }


        // /**
    //  * @return Trip[] Returns an array of Trip objects
    //  */

    public function findAllUserInfo($idUser)
    {
        return $this->createQueryBuilder('user')
        ->addSelect('travel_preferences')    
        ->join('user.travel_preferences', 'travel_preferences', 'WITH', 'travel_preferences = user.travel_preferences')
        ->addSelect('vehicule')    
        ->join('user.vehicule', 'vehicule', 'WITH', 'vehicule = user.vehicule')
        ->addSelect('user_experience')    
        ->join('user.user_experience', 'user_experience', 'WITH', 'user_experience = user.user_experience')
            ->where('user.id = :idUser')
            ->setParameter('idUser', $idUser)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    } 
  

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
