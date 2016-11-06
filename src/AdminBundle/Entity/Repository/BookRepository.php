<?php
namespace AdminBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class BookRepository extends EntityRepository
{
    public function findBookByCategoryId($id)
    {
        return $this->getEntityManager()
                ->createQuery("SELECT b.id, b.title, b.author, b.edition, b.place, b.description,
          b.quotation, b.srcImage
                                FROM AdminBundle:Book b
                                WHERE b.category = :id")
                ->setParameter('id', $id)
                ->getArrayResult();
    }

    public function findPathByBookId($id)
    {
        return $this->getEntityManager()
            ->createQuery("SELECT bk.path
                           FROM AdminBundle:Book  bk
                           WHERE bk.id = :id")
            ->setParameter('id', $id)
            ->getResult();

    }
}