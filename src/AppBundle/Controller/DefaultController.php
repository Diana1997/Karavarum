<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AdminBundle\Entity\Category;

class DefaultController extends Controller
{
    /**
    * @Route("/", name="index")
    * @Template()
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository("AdminBundle:Category")->findAll();
        return $this->render("AppBundle:Page:index.html.twig", array(
            "categories" => $categories,
        ));
    }

    /**
     * @Route("/{slug}", name="categorySlug")
     */
    public function menuAction($slug)
    {
        return $this->render("AppBundle:Menu:$slug.html.twig", array(
            "slug" => $slug,
        ));

    }
}
