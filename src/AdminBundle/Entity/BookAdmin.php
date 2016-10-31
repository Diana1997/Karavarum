<?php

namespace AdminBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
//use AdminBundle\Entity\Book;
use Doctrine\Common\Collections\ArrayCollection;

class BookAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Content')
            ->add('title', 'text')
        ->add('author', 'text')
        ->add('edition', 'number')
        ->add('place', 'text')
            ->end()
       // ->add('name', 'entity', array('class' => 'AdminBundle\Entity\Category'));*/

       ->with('Meta data')
       ->add('category', 'sonata_type_model', array(
           'class' => 'AdminBundle\Entity\Category',
           'property' => 'name',
       ))
            ->end();
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title')
            ->add('author')
            ->add('edition')
            ->add('place');
    }

    protected function configureListFields(ListMapper $listMapper)
    {

        $listMapper->addIdentifier('title')
            ->add('author')
            ->add('edition')
            ->add('place')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                    'show' => array(),
                    //'shortCat' => array('template' =>'AppBundle:CRUD:shortcut.html.twig')
                )
            ))
        ;
    }

}
