<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer", length=11)
	 */
	private $id;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Factuur", mappedBy="klantcode")
	 */
	private $facturen;

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
	private $username;

	/**
	 * @ORM\Column(type="string", length=45)
	 */
	private $password;

	public function __construct()
	{
		$this->isActive = true;
		// may not be needed, see section on salt below
		// $this->salt = md5(uniqid('', true));
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getPlainPassword()
	{
		return $this->password;
	}

	public function setPlainPassword($password)
	{
		$this->plainPassword = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}


	public function getSalt()
	{
		// you *may* need a real salt depending on your encoder
		// see section on salt below
		return null;
	}

	public function getRoles()
	{
		return array('ROLE_USER');
	}

	public function eraseCredentials()
	{
	}
}
