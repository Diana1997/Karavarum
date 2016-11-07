<?php

namespace AdminBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class QuotationAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->with('Content')
       -> add('quotation', 'text')
        ->end()
        ->with('Meta data')
            ->add('category', 'sonata_type_model', array(
                'class' => 'AdminBundle\Entity\Category',
                'property' => 'name',
            ))
            ->end();
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('quotation');
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('quotation')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                    'show' => array(),
                )
            ));
    }
}