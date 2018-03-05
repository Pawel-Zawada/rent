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
     * @ORM\ManyToOne(targetEntity="App\Entity\Klant")
     * @ORM\JoinColumn(name="klantcode", referencedColumnName="klantcode")
     */
    private $klantcode;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Medewerker")
     * @ORM\JoinColumn(name="medewerkerscode", referencedColumnName="medewerkerscode")
     */
    private $medewerkerscode;
}
