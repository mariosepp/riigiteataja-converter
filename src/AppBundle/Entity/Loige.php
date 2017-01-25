<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Loige
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
	private $loigeNr;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $kuvatavNr;
	
	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $sisuTekst;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Paragrahv")
     * @ORM\JoinColumn(name="paragrahv_id", referencedColumnName="id")
	 */
	private $paragrahv;

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
     * @return Loige
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
     * Set loigeNr
     *
     * @param string $loigeNr
     *
     * @return Loige
     */
    public function setLoigeNr($loigeNr)
    {
        $this->loigeNr = $loigeNr;

        return $this;
    }

    /**
     * Get loigeNr
     *
     * @return string
     */
    public function getLoigeNr()
    {
        return $this->loigeNr;
    }

    /**
     * Set kuvatavNr
     *
     * @param string $kuvatavNr
     *
     * @return Loige
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
     * Set sisuTekst
     *
     * @param string $sisuTekst
     *
     * @return Loige
     */
    public function setSisuTekst($sisuTekst)
    {
        $this->sisuTekst = $sisuTekst;

        return $this;
    }

    /**
     * Get sisuTekst
     *
     * @return string
     */
    public function getSisuTekst()
    {
        return $this->sisuTekst;
    }

    /**
     * Set paragrahv
     *
     * @param \AppBundle\Entity\Paragrahv $paragrahv
     *
     * @return Loige
     */
    public function setParagrahv(\AppBundle\Entity\Paragrahv $paragrahv = null)
    {
        $this->paragrahv = $paragrahv;

        return $this;
    }

    /**
     * Get paragrahv
     *
     * @return \AppBundle\Entity\Paragrahv
     */
    public function getParagrahv()
    {
        return $this->paragrahv;
    }
}
