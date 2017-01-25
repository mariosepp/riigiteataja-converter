<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Metaandmed
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
	private $valjaandja;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $dokumentLiik;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $tekstiliik;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $lyhend;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $dokumentEtapp;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $dokumentStaatus;
	
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
	 * @ORM\Column(type="date", nullable=true)
	 */
	private $kehtivuseAlgus;
	
	/**
	 * @ORM\Column(type="date", nullable=true)
	 */
	private $kehtivuseLopp;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $skeemiNimi;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $globaalId;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $metaandmedVersioon;
	
	/**
	 * @ORM\Column(type="date", nullable=true)
	 */
	private $metaandmedVersioonKuupaev;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $metaandmedVersioonPohjustaja;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $terviktekstGrupiId;
	
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
     * Set valjaandja
     *
     * @param string $valjaandja
     *
     * @return Metaandmed
     */
    public function setValjaandja($valjaandja)
    {
        $this->valjaandja = $valjaandja;

        return $this;
    }

    /**
     * Get valjaandja
     *
     * @return string
     */
    public function getValjaandja()
    {
        return $this->valjaandja;
    }

    /**
     * Set dokumentLiik
     *
     * @param string $dokumentLiik
     *
     * @return Metaandmed
     */
    public function setDokumentLiik($dokumentLiik)
    {
        $this->dokumentLiik = $dokumentLiik;

        return $this;
    }

    /**
     * Get dokumentLiik
     *
     * @return string
     */
    public function getDokumentLiik()
    {
        return $this->dokumentLiik;
    }

    /**
     * Set tekstiliik
     *
     * @param string $tekstiliik
     *
     * @return Metaandmed
     */
    public function setTekstiliik($tekstiliik)
    {
        $this->tekstiliik = $tekstiliik;

        return $this;
    }

    /**
     * Get tekstiliik
     *
     * @return string
     */
    public function getTekstiliik()
    {
        return $this->tekstiliik;
    }

    /**
     * Set lyhend
     *
     * @param string $lyhend
     *
     * @return Metaandmed
     */
    public function setLyhend($lyhend)
    {
        $this->lyhend = $lyhend;

        return $this;
    }

    /**
     * Get lyhend
     *
     * @return string
     */
    public function getLyhend()
    {
        return $this->lyhend;
    }

    /**
     * Set dokumentEtapp
     *
     * @param string $dokumentEtapp
     *
     * @return Metaandmed
     */
    public function setDokumentEtapp($dokumentEtapp)
    {
        $this->dokumentEtapp = $dokumentEtapp;

        return $this;
    }

    /**
     * Get dokumentEtapp
     *
     * @return string
     */
    public function getDokumentEtapp()
    {
        return $this->dokumentEtapp;
    }

    /**
     * Set dokumentStaatus
     *
     * @param string $dokumentStaatus
     *
     * @return Metaandmed
     */
    public function setDokumentStaatus($dokumentStaatus)
    {
        $this->dokumentStaatus = $dokumentStaatus;

        return $this;
    }

    /**
     * Get dokumentStaatus
     *
     * @return string
     */
    public function getDokumentStaatus()
    {
        return $this->dokumentStaatus;
    }

    /**
     * Set aktikuupaev
     *
     * @param \DateTime $aktikuupaev
     *
     * @return Metaandmed
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
     * @return Metaandmed
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
     * @return Metaandmed
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
     * @return Metaandmed
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
     * @return Metaandmed
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
     * @return Metaandmed
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
     * @return Metaandmed
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
     * Set kehtivuseAlgus
     *
     * @param \DateTime $kehtivuseAlgus
     *
     * @return Metaandmed
     */
    public function setKehtivuseAlgus($kehtivuseAlgus)
    {
        $this->kehtivuseAlgus = $kehtivuseAlgus;

        return $this;
    }

    /**
     * Get kehtivuseAlgus
     *
     * @return \DateTime
     */
    public function getKehtivuseAlgus()
    {
        return $this->kehtivuseAlgus;
    }

    /**
     * Set kehtivuseLopp
     *
     * @param \DateTime $kehtivuseLopp
     *
     * @return Metaandmed
     */
    public function setKehtivuseLopp($kehtivuseLopp)
    {
        $this->kehtivuseLopp = $kehtivuseLopp;

        return $this;
    }

    /**
     * Get kehtivuseLopp
     *
     * @return \DateTime
     */
    public function getKehtivuseLopp()
    {
        return $this->kehtivuseLopp;
    }

    /**
     * Set skeemiNimi
     *
     * @param string $skeemiNimi
     *
     * @return Metaandmed
     */
    public function setSkeemiNimi($skeemiNimi)
    {
        $this->skeemiNimi = $skeemiNimi;

        return $this;
    }

    /**
     * Get skeemiNimi
     *
     * @return string
     */
    public function getSkeemiNimi()
    {
        return $this->skeemiNimi;
    }

    /**
     * Set globaalId
     *
     * @param string $globaalId
     *
     * @return Metaandmed
     */
    public function setGlobaalId($globaalId)
    {
        $this->globaalId = $globaalId;

        return $this;
    }

    /**
     * Get globaalId
     *
     * @return string
     */
    public function getGlobaalId()
    {
        return $this->globaalId;
    }

    /**
     * Set metaandmedVersioon
     *
     * @param string $metaandmedVersioon
     *
     * @return Metaandmed
     */
    public function setMetaandmedVersioon($metaandmedVersioon)
    {
        $this->metaandmedVersioon = $metaandmedVersioon;

        return $this;
    }

    /**
     * Get metaandmedVersioon
     *
     * @return string
     */
    public function getMetaandmedVersioon()
    {
        return $this->metaandmedVersioon;
    }

    /**
     * Set metaandmedVersioonKuupaev
     *
     * @param \DateTime $metaandmedVersioonKuupaev
     *
     * @return Metaandmed
     */
    public function setMetaandmedVersioonKuupaev($metaandmedVersioonKuupaev)
    {
        $this->metaandmedVersioonKuupaev = $metaandmedVersioonKuupaev;

        return $this;
    }

    /**
     * Get metaandmedVersioonKuupaev
     *
     * @return \DateTime
     */
    public function getMetaandmedVersioonKuupaev()
    {
        return $this->metaandmedVersioonKuupaev;
    }

    /**
     * Set metaandmedVersioonPohjustaja
     *
     * @param string $metaandmedVersioonPohjustaja
     *
     * @return Metaandmed
     */
    public function setMetaandmedVersioonPohjustaja($metaandmedVersioonPohjustaja)
    {
        $this->metaandmedVersioonPohjustaja = $metaandmedVersioonPohjustaja;

        return $this;
    }

    /**
     * Get metaandmedVersioonPohjustaja
     *
     * @return string
     */
    public function getMetaandmedVersioonPohjustaja()
    {
        return $this->metaandmedVersioonPohjustaja;
    }

    /**
     * Set terviktekstGrupiId
     *
     * @param string $terviktekstGrupiId
     *
     * @return Metaandmed
     */
    public function setTerviktekstGrupiId($terviktekstGrupiId)
    {
        $this->terviktekstGrupiId = $terviktekstGrupiId;

        return $this;
    }

    /**
     * Get terviktekstGrupiId
     *
     * @return string
     */
    public function getTerviktekstGrupiId()
    {
        return $this->terviktekstGrupiId;
    }

    /**
     * Set akt
     *
     * @param \AppBundle\Entity\Akt $akt
     *
     * @return Metaandmed
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
