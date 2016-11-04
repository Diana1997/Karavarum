<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AdminBundle\Entity\Category;
use AdminBundle\Entity\Book;

class DefaultController extends Controller
{
    /**
    * @Route("/index/{slug}", defaults={"slug"="1"}, name="index")
    * @Template()
    */
    public function indexAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository("AdminBundle:Category")->findAll();
        $books = $em->getRepository("AdminBundle:Book")->findBookByCategoryId($slug);
        return $this->render("AppBundle:Page:index.html.twig", array(
            "categories" => $categories,
            "books" => $books,
        ));
    }
}
