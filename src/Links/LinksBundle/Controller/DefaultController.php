<?php

namespace Links\LinksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LinksLinksBundle:Default:index.html.twig', array('name' => $name));
    }
}
