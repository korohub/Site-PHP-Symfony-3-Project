<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * Agenda
 *
 * @ORM\Table(name="agenda")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AgendaRepository")
 */
class Agenda
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="heure", type="string", length=15, nullable=true)
     */
    private $heure;

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
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="town", type="string", length=255)
     */
    private $town;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=10)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="salon", type="boolean", length=255)
     */
    private $salon;

    /**
     * @var bool
     *
     * @ORM\Column(name="domicile", type="boolean")
     */
    private $domicile;

    /**
     * @var int
     *
     * 
     * @ORM\OneToMany(targetEntity="Employe", mappedBy="id")
     *   
     */
    private $employeId;

    /**
     * @var int
     *
     * @ORM\OneToMany(targetEntity="Salon", mappedBy="id")
     *
     */
    private $salonId;

    public function __construct(){
        $this->salonId = new ArrayCollection();
        $this->employeId = new ArrayCollection();
       
    }


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Agenda
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heure
     *
     * @param string $heure
     *
     * @return Agenda
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return string
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Agenda
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
     * @return Agenda
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
     * Set address
     *
     * @param string $address
     *
     * @return Agenda
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Agenda
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set town
     *
     * @param string $town
     *
     * @return Agenda
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Agenda
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Agenda
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
     * Set salon
     *
     * @param string $salon
     *
     * @return Agenda
     */
    public function setSalon($salon)
    {
        $this->salon = $salon;

        return $this;
    }

    /**
     * Get salon
     *
     * @return string
     */
    public function getSalon()
    {
        return $this->salon;
    }

    /**
     * Set domicile
     *
     * @param boolean $domicile
     *
     * @return Agenda
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
     * Set employeId
     *
     * @param string $employeId
     *
     * @return Agenda
     */
    public function setEmployeId($employeId)
    {
        $this->employeId = $employeId;

        return $this;
    }

    /**
     * Get employeId
     *
     * @return string
     */
    public function getEmployeId()
    {
        return $this->employeId;
    }

    /**
     * Set salonId
     *
     * @param integer $salonId
     *
     * @return Agenda
     */
    public function setSalonId($salonId)
    {
        $this->salonId = $salonId;

        return $this;
    }

    /**
     * Get salonId
     *
     * @return int
     */
    public function getSalonId()
    {
        return $this->salonId;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Agenda
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Agenda
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
}
