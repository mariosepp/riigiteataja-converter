<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Akt
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $aktinimi;

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
     * Set aktinimi
     *
     * @param string $aktinimi
     *
     * @return Akt
     */
    public function setAktinimi($aktinimi)
    {
        $this->aktinimi = $aktinimi;

        return $this;
    }

    /**
     * Get aktinimi
     *
     * @return string
     */
    public function getAktinimi()
    {
        return $this->aktinimi;
    }
}
