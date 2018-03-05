<?php

namespace App\Repository;

use App\Entity\Factuur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Factuur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Factuur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Factuur[]    findAll()
 * @method Factuur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactuurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Factuur::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('f')
            ->where('f.something = :value')->setParameter('value', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
