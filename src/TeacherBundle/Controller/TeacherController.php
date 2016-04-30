<?php

namespace TeacherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TeacherController extends Controller
{
    /**
     * @Route("/teacher")
     */
    public function indexAction()
    {
        return $this->render('TeacherBundle:Default:index.html.twig');
    }
}
