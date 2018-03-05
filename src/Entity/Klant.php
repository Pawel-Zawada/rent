<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KlantRepository")
 */
class Klant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", length=11)
     */
    private $klantcode;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $voorletters;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $tussenvoegsels;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $achternaam;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $adres;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $postcode;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $woonplaats;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $gebruikersnaam;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $wachtwoord;
}
