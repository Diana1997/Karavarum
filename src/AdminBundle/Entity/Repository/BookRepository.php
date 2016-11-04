<?php
namespace AdminBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class BookRepository extends EntityRepository
{
    public function findBookByCategoryId($id)
    {
        return $this->getEntityManager()
                ->createQuery("SELECT b.title, b.author, b.edition, b.place
                                FROM AdminBundle:Book b
                                WHERE b.category = :id")
                ->setParameter('id', $id)
                ->getArrayResult();
    }
}