<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AdminBundle\Entity\Repository\QuotationRepository")
 * @ORM\Table(name="quotation")
 */
class Quotation
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
    protected $quotation;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="quotation")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

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
     * Set quotation
     *
     * @param string $quotation
     * @return Quotation
     */
    public function setQuotation($quotation)
    {
        $this->quotation = $quotation;

        return $this;
    }

    /**
     * Get quotation
     *
     * @return string 
     */
    public function getQuotation()
    {
        return $this->quotation;
    }

    /**
     * Set category
     *
     * @param \AdminBundle\Entity\Category $category
     * @return Quotation
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
}
