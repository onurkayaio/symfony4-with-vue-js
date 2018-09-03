<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('Default/index.html.twig', []);
    }

    /**
     * @Route("/second", name="second")
     */
    public function secondAction()
    {
        return $this->render('Default/second.html.twig', []);
    }
}