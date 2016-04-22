<?php

namespace SessionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/session")
     */
    public function indexAction()
    {
        return $this->render('SessionBundle:Default:index.html.twig');
    }
}
