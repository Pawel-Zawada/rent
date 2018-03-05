<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FactuurRepository")
 */
class Factuur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $factuurnummer;

    /**
     * @ORM\Column(type="date")
     */
    private $factuurdatum;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $kenteken;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Klant", inversedBy="klantcode")
     * @ORM\Column(type="integer", length=11)
     */
    private $klantcode;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Medewerker", inversedBy="medewerkerscode")
     * @ORM\Column(type="integer", length=11)
     */
    private $medewerkerscode;
}
