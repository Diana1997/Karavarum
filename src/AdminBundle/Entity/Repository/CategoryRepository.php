<?php

namespace AdminBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    public function findAll()
    {
        return $this->getEntityManager()
                ->createQuery("SELECT c FROM AdminBundle:Category c")
                ->getResult();
    }
}