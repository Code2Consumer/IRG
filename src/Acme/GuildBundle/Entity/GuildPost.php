<?php

namespace Acme\GuildBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuildPost
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\GuildBundle\Entity\GuildPostRepository")
 */
class GuildPost
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
     * @ORM\Column(name="GuildId", type="integer")
     */
    private $guildId;

    /**
     * @var string
     *
     * @ORM\Column(name="UserId", type="string", length=255)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="UserName", type="string", length=255)
     */
    private $userName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Message", type="text")
     */
    private $message;


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
     * @return GuildPost
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
     * @param string $userId
     * @return GuildPost
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return GuildPost
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
     * @return GuildPost
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
     * @return GuildPost
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
}
