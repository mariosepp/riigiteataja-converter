<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Osa
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $tunnus;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $osaNr;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $kuvatavNr;
	
	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $osaPealkiri;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Akt")
     * @ORM\JoinColumn(name="akt_id", referencedColumnName="id")
	 */
	private $akt;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tunnus
     *
     * @param string $tunnus
     *
     * @return Osa
     */
    public function setTunnus($tunnus)
    {
        $this->tunnus = $tunnus;

        return $this;
    }

    /**
     * Get tunnus
     *
     * @return string
     */
    public function getTunnus()
    {
        return $this->tunnus;
    }

    /**
     * Set osaNr
     *
     * @param string $osaNr
     *
     * @return Osa
     */
    public function setOsaNr($osaNr)
    {
        $this->osaNr = $osaNr;

        return $this;
    }

    /**
     * Get osaNr
     *
     * @return string
     */
    public function getOsaNr()
    {
        return $this->osaNr;
    }

    /**
     * Set kuvatavNr
     *
     * @param string $kuvatavNr
     *
     * @return Osa
     */
    public function setKuvatavNr($kuvatavNr)
    {
        $this->kuvatavNr = $kuvatavNr;

        return $this;
    }

    /**
     * Get kuvatavNr
     *
     * @return string
     */
    public function getKuvatavNr()
    {
        return $this->kuvatavNr;
    }

    /**
     * Set osaPealkiri
     *
     * @param string $osaPealkiri
     *
     * @return Osa
     */
    public function setOsaPealkiri($osaPealkiri)
    {
        $this->osaPealkiri = $osaPealkiri;

        return $this;
    }

    /**
     * Get osaPealkiri
     *
     * @return string
     */
    public function getOsaPealkiri()
    {
        return $this->osaPealkiri;
    }

    /**
     * Set akt
     *
     * @param \AppBundle\Entity\Akt $akt
     *
     * @return Osa
     */
    public function setAkt(\AppBundle\Entity\Akt $akt = null)
    {
        $this->akt = $akt;

        return $this;
    }

    /**
     * Get akt
     *
     * @return \AppBundle\Entity\Akt
     */
    public function getAkt()
    {
        return $this->akt;
    }
}
