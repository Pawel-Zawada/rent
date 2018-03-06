<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User extends BaseUser
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="integer", length=11)
	 */
	protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Factuur", mappedBy="klantcode")
	 */
	private $facturen;

	/**
	 * @ORM\Column(type="string", length=11, nullable=true)
	 */
	private $voorletters;

	/**
	 * @ORM\Column(type="string", length=11, nullable=true)
	 */
	private $tussenvoegsels;

	/**
	 * @ORM\Column(type="string", length=45, nullable=true)
	 */
	private $achternaam;

	/**
	 * @ORM\Column(type="string", length=45, nullable=true)
	 */
	private $adres;

	/**
	 * @ORM\Column(type="string", length=7, nullable=true)
	 */
	private $postcode;

	/**
	 * @ORM\Column(type="string", length=45, nullable=true)
	 */
	private $woonplaats;

    /**
     * @return mixed
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }

    /**
     * @param mixed $achternaam
     */
    public function setAchternaam($achternaam): void
    {
        $this->achternaam = $achternaam;
    }

    /**
     * @return mixed
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * @param mixed $adres
     */
    public function setAdres($adres): void
    {
        $this->adres = $adres;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFacturen()
    {
        return $this->facturen;
    }

    /**
     * @param mixed $facturen
     */
    public function setFacturen($facturen): void
    {
        $this->facturen = $facturen;
    }

    /**
     * @return mixed
     */
    public function getVoorletters()
    {
        return $this->voorletters;
    }

    /**
     * @param mixed $voorletters
     */
    public function setVoorletters($voorletters): void
    {
        $this->voorletters = $voorletters;
    }

    /**
     * @return mixed
     */
    public function getTussenvoegsels()
    {
        return $this->tussenvoegsels;
    }

    /**
     * @param mixed $tussenvoegsels
     */
    public function setTussenvoegsels($tussenvoegsels): void
    {
        $this->tussenvoegsels = $tussenvoegsels;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     */
    public function setPostcode($postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * @return mixed
     */
    public function getWoonplaats()
    {
        return $this->woonplaats;
    }

    /**
     * @param mixed $woonplaats
     */
    public function setWoonplaats($woonplaats): void
    {
        $this->woonplaats = $woonplaats;
    }
}
