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
    private $factuurregelcode;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Factuur")
     * @ORM\JoinColumn(name="factuurnummer", referencedColumnName="factuurnummer")
     */
    private $factuurnummer;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Auto")
     * @ORM\JoinColumn(name="kenteken", referencedColumnName="kenteken")
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
