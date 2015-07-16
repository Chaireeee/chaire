<?php

namespace GenerateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stype1
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Stype5 extends Slide
{



    /**
     * @var string
     *
     * @ORM\Column(name="texte1", type="string", length=3000)
     */
    private $texte1;

    /**
     * @var string
     *
     * @ORM\Column(name="texte2", type="string", length=3000)
     */
    private $texte2;

    /**
     * @param string $texte1
     */
    public function setTexte1($texte1)
    {
        $this->texte1 = $texte1;
    }

    /**
     * @return string
     */
    public function getTexte1()
    {
        return $this->texte1;
    }

    /**
     * @param string $texte2
     */
    public function setTexte2($texte2)
    {
        $this->texte2 = $texte2;
    }

    /**
     * @return string
     */
    public function getTexte2()
    {
        return $this->texte2;
    }



    /**
     * @ORM\OneToOne(targetEntity="GenerateurBundle\Entity\Picture", cascade={"persist","remove"})
     */
    private $photo1;

    /**
     * @ORM\OneToOne(targetEntity="GenerateurBundle\Entity\Picture", cascade={"persist","remove"})
     */
    private $photo2;

    /**
     * @param mixed $photo1
     */
    public function setPhoto1($photo1)
    {
        $this->photo1 = $photo1;
    }

    /**
     * @return mixed
     */
    public function getPhoto1()
    {
        return $this->photo1;
    }

    /**
     * @param mixed $photo2
     */
    public function setPhoto2($photo2)
    {
        $this->photo2 = $photo2;
    }

    /**
     * @return mixed
     */
    public function getPhoto2()
    {
        return $this->photo2;
    }



}