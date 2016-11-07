<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AdminBundle\Entity\Category;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use AdminBundle\Traits\File;
use AdminBundle\Traits\Image;

/**
 * @ORM\Entity(repositoryClass="AdminBundle\Entity\Repository\BookRepository")
 * @ORM\Table(name="book")
 */
class Book
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     */
    protected $author;

    /**
     * @ORM\Column(type="integer")
     */
    protected $edition;

    /**
     * @ORM\Column(type="string")
     */
    protected $place;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="text",  nullable=true)
     */
    protected $quotation;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="book")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

    use File;
    use Image;

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
     * Set title
     *
     * @param string $title
     * @return Book
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
     * Set author
     *
     * @param string $author
     * @return Book
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set edition
     *
     * @param integer $edition
     * @return Book
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get edition
     *
     * @return integer
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return Book
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set category
     *
     * @param \AdminBundle\Entity\Category $category
     * @return Book
     */
    public function setCategory(\AdminBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AdminBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getQuotation()
    {
        return $this->quotation;
    }

    /**
     * @param mixed $quotation
     */
    public function setQuotation($quotation)
    {
        $this->quotation = $quotation;
    }

}
