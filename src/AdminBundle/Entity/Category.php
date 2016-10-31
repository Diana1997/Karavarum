<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AdminBundle\Entity\Book;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="category")
 */
class Category
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
    protected $name;

    /**
     *@ORM\OneToMany(targetEntity="Category", mappedBy="book")
     */
    protected $book_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBookId()
    {
        return $this->book_id;
    }

    /**
     * @param mixed $book_id
     */public function setBookId($book_id)
{
    $this->book_id = $book_id;
}
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->book_id = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add book_id
     *
     * @param \AdminBundle\Entity\Category $bookId
     * @return Category
     */
    public function addBookId(\AdminBundle\Entity\Category $bookId)
    {
        $this->book_id[] = $bookId;

        return $this;
    }

    /**
     * Remove book_id
     *
     * @param \AdminBundle\Entity\Category $bookId
     */
    public function removeBookId(\AdminBundle\Entity\Category $bookId)
    {
        $this->book_id->removeElement($bookId);
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Category
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
