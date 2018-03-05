<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AutoRepository")
 */
class Auto
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=45)
     */
    private $kenteken;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $merk;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $type;

    /**
     * @ORM\Column(type="integer", length=11)
     */
    private $dagprijs;
}
