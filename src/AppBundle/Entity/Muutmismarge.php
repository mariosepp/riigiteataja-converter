<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Muutmismarge
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="date", nullable=true)
	 */
	private $aktikuupaev;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $rtOsa;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $rtAasta;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $rtNr;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $rtArtikkel;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $aktViide;
	
	/**
	 * @ORM\Column(type="date", nullable=true)
	 */
	private $joustumine;
	
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
     * Set aktikuupaev
     *
     * @param \DateTime $aktikuupaev
     *
     * @return Muutmismarge
     */
    public function setAktikuupaev($aktikuupaev)
    {
        $this->aktikuupaev = $aktikuupaev;

        return $this;
    }

    /**
     * Get aktikuupaev
     *
     * @return \DateTime
     */
    public function getAktikuupaev()
    {
        return $this->aktikuupaev;
    }

    /**
     * Set rtOsa
     *
     * @param string $rtOsa
     *
     * @return Muutmismarge
     */
    public function setRtOsa($rtOsa)
    {
        $this->rtOsa = $rtOsa;

        return $this;
    }

    /**
     * Get rtOsa
     *
     * @return string
     */
    public function getRtOsa()
    {
        return $this->rtOsa;
    }

    /**
     * Set rtAasta
     *
     * @param string $rtAasta
     *
     * @return Muutmismarge
     */
    public function setRtAasta($rtAasta)
    {
        $this->rtAasta = $rtAasta;

        return $this;
    }

    /**
     * Get rtAasta
     *
     * @return string
     */
    public function getRtAasta()
    {
        return $this->rtAasta;
    }

    /**
     * Set rtNr
     *
     * @param string $rtNr
     *
     * @return Muutmismarge
     */
    public function setRtNr($rtNr)
    {
        $this->rtNr = $rtNr;

        return $this;
    }

    /**
     * Get rtNr
     *
     * @return string
     */
    public function getRtNr()
    {
        return $this->rtNr;
    }

    /**
     * Set rtArtikkel
     *
     * @param string $rtArtikkel
     *
     * @return Muutmismarge
     */
    public function setRtArtikkel($rtArtikkel)
    {
        $this->rtArtikkel = $rtArtikkel;

        return $this;
    }

    /**
     * Get rtArtikkel
     *
     * @return string
     */
    public function getRtArtikkel()
    {
        return $this->rtArtikkel;
    }

    /**
     * Set aktViide
     *
     * @param string $aktViide
     *
     * @return Muutmismarge
     */
    public function setAktViide($aktViide)
    {
        $this->aktViide = $aktViide;

        return $this;
    }

    /**
     * Get aktViide
     *
     * @return string
     */
    public function getAktViide()
    {
        return $this->aktViide;
    }

    /**
     * Set joustumine
     *
     * @param \DateTime $joustumine
     *
     * @return Muutmismarge
     */
    public function setJoustumine($joustumine)
    {
        $this->joustumine = $joustumine;

        return $this;
    }

    /**
     * Get joustumine
     *
     * @return \DateTime
     */
    public function getJoustumine()
    {
        return $this->joustumine;
    }

    /**
     * Set akt
     *
     * @param \AppBundle\Entity\Akt $akt
     *
     * @return Muutmismarge
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
