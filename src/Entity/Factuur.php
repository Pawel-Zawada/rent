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
     * @ORM\Column(type="string")
     */
    private $kenteken;

    /**
     * @return mixed
     */
    public function getKenteken()
    {
        return $this->kenteken;
    }

    /**
     * @param mixed $kenteken
     */
    public function setKenteken($kenteken): void
    {
        $this->kenteken = $kenteken;
    }

    /**
     * @return mixed
     */
    public function getFactuurnummer()
    {
        return $this->factuurnummer;
    }

    /**
     * @param mixed $factuurnummer
     */
    public function setFactuurnummer($factuurnummer): void
    {
        $this->factuurnummer = $factuurnummer;
    }

    /**
     * @return mixed
     */
    public function getFactuurdatum()
    {
        return $this->factuurdatum;
    }

    /**
     * @param mixed $factuurdatum
     */
    public function setFactuurdatum($factuurdatum): void
    {
        $this->factuurdatum = $factuurdatum;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @ORM\Column(type="date")
     */
    private $factuurdatum;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id;
}
