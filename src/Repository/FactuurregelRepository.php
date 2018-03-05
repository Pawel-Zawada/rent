<?php

namespace App\Repository;

use App\Entity\Factuurregel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Factuurregel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Factuurregel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Factuurregel[]    findAll()
 * @method Factuurregel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactuurregelRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Factuurregel::class);
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
