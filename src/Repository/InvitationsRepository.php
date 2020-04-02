<?php

namespace App\Repository;

use App\Entity\FriendsSearch;
use App\Entity\Invitations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;

/**
 * @method Invitations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Invitations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Invitations[]    findAll()
 * @method Invitations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InvitationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Invitations::class);
    }


    /**
     * @param FriendsSearch $search
     * @return Query
     */
    public function findAllVisibleQuery(FriendsSearch $search): Query
    {
        $query = $this->findVisibleQuery();

        if ($search->getFriends()){
           
            $query = $query
                ->where('u.id = :friends')
                ->setParameter('friends', $search->getFriends());
        }

        return $query->getQuery();
    }

    /**
     * @return Invitations[]
     */
    public function findVisibleQuery(): QueryBuilder
    {
        return $this->createQueryBuilder('u')
            ->where('u.id = false');
    }


    // /**
    //  * @return Invitations[] Returns an array of Invitations objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Invitations
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
