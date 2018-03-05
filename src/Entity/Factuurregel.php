<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FactuurregelRepository")
 */
class Factuurregel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $factuurnummer;

    /**
     * @ORM\Column(type="string" length=45)
     */
    private $kenteken;

    /**
     * @ORM\Column(type="date")
     */
    private $begindatum;

    /**
     * @ORM\Column(type="date")
     */
    private $einddatum;
}
