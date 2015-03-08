<?php

namespace Acme\GuildBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planing
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\GuildBundle\Entity\PlaningRepository")
 */
class Planing
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
     * @ORM\Column(name="guild_id", type="integer")
     */
    private $guildId;

    /**
     * @var integer
     *
     * @ORM\Column(name="auteur_id", type="integer")
     */
    private $auteurId;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur_name", type="string", length=255)
     */
    private $auteurName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="infos", type="text")
     */
    private $infos;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    public function __construct(){
        $this->date= new \DateTime();
    }

    /**
     * Set guildId
     *
     * @param integer $guildId
     * @return Planing
     */
    public function setGuildId($guildId)
    {
        $this->guildId = $guildId;

        return $this;
    }

    /**
     * Get guildId
     *
     * @return integer 
     */
    public function getGuildId()
    {
        return $this->guildId;
    }

    /**
     * Set auteurId
     *
     * @param integer $auteurId
     * @return Planing
     */
    public function setAuteurId($auteurId)
    {
        $this->auteurId = $auteurId;

        return $this;
    }

    /**
     * Get auteurId
     *
     * @return integer 
     */
    public function getAuteurId()
    {
        return $this->auteurId;
    }

    /**
     * Set auteurName
     *
     * @param string $auteurName
     * @return Planing
     */
    public function setAuteurName($auteurName)
    {
        $this->auteurName = $auteurName;

        return $this;
    }

    /**
     * Get auteurName
     *
     * @return string 
     */
    public function getAuteurName()
    {
        return $this->auteurName;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Planing
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
     * Set titre
     *
     * @param string $titre
     * @return Planing
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
     * Set infos
     *
     * @param string $infos
     * @return Planing
     */
    public function setInfos($infos)
    {
        $this->infos = $infos;

        return $this;
    }

    /**
     * Get infos
     *
     * @return string 
     */
    public function getInfos()
    {
        return $this->infos;
    }
}
