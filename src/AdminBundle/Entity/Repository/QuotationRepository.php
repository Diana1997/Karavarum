<?php
namespace AdminBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use Doctrine\ORM\Mapping as ORM;


class QuotationRepository extends EntityRepository
{
    public function findQuotationByCategoryId($id)
    {

     /* $p =  $this->getEntityManager()
            ->createQuery("SELECT q.quotation
                                FROM AdminBundle:Quotation q
                                WHERE q.category = :id")
            ->setParameter('id', $id)
          ->getResult();

       return  $p->createQueryBuilder('q')
            ->addSelect('RAND() as HIDDEN rand')
            ->addOrderBy('rand')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult(); */
    return $this->getEntityManager()
            ->createQuery("SELECT q.quotation
                                FROM AdminBundle:Quotation q
                                WHERE q.category = :id ")
            ->setParameter('id', $id)
            ->getResult();


      //  return $this->createQueryBuilder()

    }
}