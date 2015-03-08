<?php

namespace Acme\GuildBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guild
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\GuildBundle\Entity\GuildRepository")
 */
class Guild
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
     * @var string
     *
     * @ORM\Column(name="Guild_name", type="string", length=255)
     */
    private $guildName;

    /**
     * @var string
     *
     * @ORM\Column(name="GM", type="string", length=255)
     */
    private $gM;

    /**
     * @var string
     *
     * @ORM\Column(name="CoGM", type="string", length=255)
     */
    private $coGM;

    /**
     * @var integer
     *
     * @ORM\Column(name="GM_id", type="integer")
     */
    private $gMId;

    /**
     * @var string
     *
     * @ORM\Column(name="MMO_Principale", type="string", length=255)
     */
    private $mMOPrincipale;

    /**
     * @var string
     *
     * @ORM\Column(name="Serveur", type="string", length=255)
     */
    private $serveur;


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
     * Set guildName
     *
     * @param string $guildName
     * @return Guild
     */
    public function setGuildName($guildName)
    {
        $this->guildName = $guildName;

        return $this;
    }

    /**
     * Get guildName
     *
     * @return string 
     */
    public function getGuildName()
    {
        return $this->guildName;
    }

    /**
     * Set gM
     *
     * @param string $gM
     * @return Guild
     */
    public function setGM($gM)
    {
        $this->gM = $gM;

        return $this;
    }

    /**
     * Get gM
     *
     * @return string 
     */
    public function getGM()
    {
        return $this->gM;
    }

    /**
     * Set coGM
     *
     * @param string $coGM
     * @return Guild
     */
    public function setCoGM($coGM)
    {
        $this->coGM = $coGM;

        return $this;
    }

    /**
     * Get coGM
     *
     * @return string 
     */
    public function getCoGM()
    {
        return $this->coGM;
    }

    /**
     * Set gMId
     *
     * @param integer $gMId
     * @return Guild
     */
    public function setGMId($gMId)
    {
        $this->gMId = $gMId;

        return $this;
    }

    /**
     * Get gMId
     *
     * @return integer 
     */
    public function getGMId()
    {
        return $this->gMId;
    }

    /**
     * Set mMOPrincipale
     *
     * @param string $mMOPrincipale
     * @return Guild
     */
    public function setMMOPrincipale($mMOPrincipale)
    {
        $this->mMOPrincipale = $mMOPrincipale;

        return $this;
    }

    /**
     * Get mMOPrincipale
     *
     * @return string 
     */
    public function getMMOPrincipale()
    {
        return $this->mMOPrincipale;
    }

    /**
     * Set serveur
     *
     * @param string $serveur
     * @return Guild
     */
    public function setServeur($serveur)
    {
        $this->serveur = $serveur;

        return $this;
    }

    /**
     * Get serveur
     *
     * @return string 
     */
    public function getServeur()
    {
        return $this->serveur;
    }
}
