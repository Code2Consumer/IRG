<?php

namespace Acme\GuildBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidature
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\GuildBundle\Entity\CandidatureRepository")
 */
class Candidature
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
     * @ORM\Column(name="Guild_Id", type="integer")
     */
    private $guildId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="guild_name", type="string", length=255)
     */
    private $guildName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=255)
     */
    private $userName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="message_titre", type="string", length=255)
     */
    private $messageTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="situation", type="string", length=255)
     */
    private $situation;


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
     * Set guildId
     *
     * @param integer $guildId
     * @return Candidature
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
     * Set userId
     *
     * @param integer $userId
     * @return Candidature
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set guildName
     *
     * @param string $guildName
     * @return Candidature
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
     * Set userName
     *
     * @param string $userName
     * @return Candidature
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Candidature
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
     * Set message
     *
     * @param string $message
     * @return Candidature
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
     * Set messageTitre
     *
     * @param string $messageTitre
     * @return Candidature
     */
    public function setMessageTitre($messageTitre)
    {
        $this->messageTitre = $messageTitre;

        return $this;
    }

    /**
     * Get messageTitre
     *
     * @return string 
     */
    public function getMessageTitre()
    {
        return $this->messageTitre;
    }

    /**
     * Set situation
     *
     * @param string $situation
     * @return Candidature
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;

        return $this;
    }

    /**
     * Get situation
     *
     * @return string 
     */
    public function getSituation()
    {
        return $this->situation;
    }
}
