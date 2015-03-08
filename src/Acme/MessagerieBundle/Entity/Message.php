<?php

namespace Acme\MessagerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\MessagerieBundle\Entity\MessageRepository")
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_env", type="integer")
     */
    private $idEnv;

    /**
     * @var string
     *
     * @ORM\Column(name="name_env", type="string", length=255)
     */
    private $nameEnv;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_dest", type="integer")
     */
    private $idDest;

    /**
     * @var string
     *
     * @ORM\Column(name="name_dest", type="string", length=255)
     */
    private $nameDest;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vue", type="boolean")
     */
    private $vue;

    public function __construct(){
        $this->date= new \DateTime();
    }


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
     * Set idEnv
     *
     * @param integer $idEnv
     * @return Message
     */
    public function setIdEnv($idEnv)
    {
        $this->idEnv = $idEnv;

        return $this;
    }

    /**
     * Get idEnv
     *
     * @return integer 
     */
    public function getIdEnv()
    {
        return $this->idEnv;
    }

    /**
     * Set nameEnv
     *
     * @param string $nameEnv
     * @return Message
     */
    public function setNameEnv($nameEnv)
    {
        $this->nameEnv = $nameEnv;

        return $this;
    }

    /**
     * Get nameEnv
     *
     * @return string 
     */
    public function getNameEnv()
    {
        return $this->nameEnv;
    }

    /**
     * Set idDest
     *
     * @param integer $idDest
     * @return Message
     */
    public function setIdDest($idDest)
    {
        $this->idDest = $idDest;

        return $this;
    }

    /**
     * Get idDest
     *
     * @return integer 
     */
    public function getIdDest()
    {
        return $this->idDest;
    }

    /**
     * Set nameDest
     *
     * @param string $nameDest
     * @return Message
     */
    public function setNameDest($nameDest)
    {
        $this->nameDest = $nameDest;

        return $this;
    }

    /**
     * Get nameDest
     *
     * @return string 
     */
    public function getNameDest()
    {
        return $this->nameDest;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Message
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Message
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
     * Set vue
     *
     * @param boolean $vue
     * @return Message
     */
    public function setVue($vue)
    {
        $this->vue = $vue;

        return $this;
    }

    /**
     * Get vue
     *
     * @return boolean 
     */
    public function getVue()
    {
        return $this->vue;
    }
}
