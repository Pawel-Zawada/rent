<?php

namespace App\Repository;

use App\Entity\Medewerker;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Medewerker|null find($id, $lockMode = null, $lockVersion = null)
 * @method Medewerker|null findOneBy(array $criteria, array $orderBy = null)
 * @method Medewerker[]    findAll()
 * @method Medewerker[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MedewerkerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Medewerker::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('m')
            ->where('m.something = :value')->setParameter('value', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
