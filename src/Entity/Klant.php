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
     * @ORM\Column(type="string")
     */
    private $klantcode;

    private $voorletters;

    private $tussenvoegsels;

    private $achternaam;

    private $adres;

    private $postcode;

    private $woonplaats;

    private $gebruikersnaam;

    private $wachtwoord;
}
