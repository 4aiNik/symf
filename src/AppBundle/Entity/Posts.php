<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Posts
 *
 * @ORM\Table(name="posts")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostsRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Posts
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
     * @var comments[]
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\comments", mappedBy="post")
     */
    private $comments;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Сообщение пустое")
     *
     * @Assert\Length(
     *     min="10",
     *     max="255",
     *     minMessage="Длина строки не менее {{ limit }} символов",
     *     maxMessage="Длина строки не более {{ limit }} символов"
     * )
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Имя пустое")
     *
     * @Assert\Length(
     *     min="3",
     *     max="128",
     *     minMessage="Длина строки не менее {{ limit }} символов",
     *     maxMessage="Длина строки не более {{ limit }} символов"
     * )
     *
     * @ORM\Column(name="username", type="string", length=128)
     */
    private $username = 'Аноним';

    /**
     * @var int
     *
     * @ORM\Column(name="likes_cnt", type="integer")
     */
    private $likesCnt = 0;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Заголовок пустой")
     *
     * @Assert\Length(
     *     max="128",
     *     maxMessage="Длина строки не более {{ limit }} символов"
     * )
     *
     * @ORM\Column(name="title", type="string", length=128)
     */
    private $title;

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
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function updateTimestamp() {
        $this->setUpdatedAt(new \DateTime('now'));
        if(!$this->getCreatedAt()) {
            $this->setCreatedAt(new \DateTime('now'));
        }
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Posts
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Posts
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Posts
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Posts
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set likesCnt
     *
     * @param integer $likesCnt
     *
     * @return Posts
     */
    public function setLikesCnt($likesCnt)
    {
        $this->likesCnt = $likesCnt;

        return $this;
    }

    /**
     * Get likesCnt
     *
     * @return integer
     */
    public function getLikesCnt()
    {
        return $this->likesCnt;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Posts
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comment
     *
     * @param \AppBundle\Entity\comments $comment
     *
     * @return Posts
     */
    public function addComment(\AppBundle\Entity\comments $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \AppBundle\Entity\comments $comment
     */
    public function removeComment(\AppBundle\Entity\comments $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return Comments[]
     */
    public function getComments()
    {
        return $this->comments;
    }
}
