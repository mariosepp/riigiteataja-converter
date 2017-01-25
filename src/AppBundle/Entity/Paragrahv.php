<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Paragrahv
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
	private $paragrahvNr;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $kuvatavNr;
	
	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $paragrahvPealkiri;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Osa")
     * @ORM\JoinColumn(name="osa_id", referencedColumnName="id")
	 */
	private $osa;

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
     * @return Paragrahv
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
     * Set paragrahvNr
     *
     * @param string $paragrahvNr
     *
     * @return Paragrahv
     */
    public function setParagrahvNr($paragrahvNr)
    {
        $this->paragrahvNr = $paragrahvNr;

        return $this;
    }

    /**
     * Get paragrahvNr
     *
     * @return string
     */
    public function getParagrahvNr()
    {
        return $this->paragrahvNr;
    }

    /**
     * Set kuvatavNr
     *
     * @param string $kuvatavNr
     *
     * @return Paragrahv
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
     * Set paragrahvPealkiri
     *
     * @param string $paragrahvPealkiri
     *
     * @return Paragrahv
     */
    public function setParagrahvPealkiri($paragrahvPealkiri)
    {
        $this->paragrahvPealkiri = $paragrahvPealkiri;

        return $this;
    }

    /**
     * Get paragrahvPealkiri
     *
     * @return string
     */
    public function getParagrahvPealkiri()
    {
        return $this->paragrahvPealkiri;
    }

    /**
     * Set osa
     *
     * @param \AppBundle\Entity\Osa $osa
     *
     * @return Paragrahv
     */
    public function setOsa(\AppBundle\Entity\Osa $osa = null)
    {
        $this->osa = $osa;

        return $this;
    }

    /**
     * Get osa
     *
     * @return \AppBundle\Entity\Osa
     */
    public function getOsa()
    {
        return $this->osa;
    }
}
