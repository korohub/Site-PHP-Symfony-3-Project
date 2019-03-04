<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employe
 *
 * @ORM\Table(name="employe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmployeRepository")
 */
class Employe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var bool
     *
     * @ORM\Column(name="domicile", type="boolean")
     */
    private $domicile;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     *@var int
     * @ORM\ManyToOne(targetEntity="Agenda", inversedBy="employeId")
     * @ORM\JoinColumn(name="eRdvId", referencedColumnName="id", nullable=true)
     */
    private $eRdvId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Employe
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Employe
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set domicile
     *
     * @param boolean $domicile
     *
     * @return Employe
     */
    public function setDomicile($domicile)
    {
        $this->domicile = $domicile;

        return $this;
    }

    /**
     * Get domicile
     *
     * @return bool
     */
    public function getDomicile()
    {
        return $this->domicile;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Employe
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Employe
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Employe
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set rdvId
     *
     * @param \AppBundle\Entity\Agenda $rdvId
     *
     * @return Employe
     */
    public function setRdvId(\AppBundle\Entity\Agenda $rdvId = null)
    {
        $this->rdvId = $rdvId;

        return $this;
    }

    /**
     * Get rdvId
     *
     * @return \AppBundle\Entity\Agenda
     */
    public function getRdvId()
    {
        return $this->rdvId;
    }

    /**
     * Set eRdvId
     *
     * @param \AppBundle\Entity\Agenda $eRdvId
     *
     * @return Employe
     */
    public function setERdvId(\AppBundle\Entity\Agenda $eRdvId = null)
    {
        $this->eRdvId = $eRdvId;

        return $this;
    }

    /**
     * Get eRdvId
     *
     * @return \AppBundle\Entity\Agenda
     */
    public function getERdvId()
    {
        return $this->eRdvId;
    }
}
