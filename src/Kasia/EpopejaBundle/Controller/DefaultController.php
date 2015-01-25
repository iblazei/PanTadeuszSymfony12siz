<?php

namespace Kasia\EpopejaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KasiaEpopejaBundle:Default:index.html.twig', array());
    }
}
