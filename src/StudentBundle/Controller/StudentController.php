<?php

namespace StudentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class StudentController extends Controller
{
    /**
     * @Route("/student")
     */
    public function indexAction()
    {
        return $this->render('StudentBundle:Default:index.html.twig');
    }

    /**
     * @Route("/student/course/{courseId}/assignments")
     * @param string $courseId
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewAssignmentsAction(string $courseId)
    {
        return $this->render('StudentBundle:Assignments:view.html.twig', ['courseId' => $courseId]);
    }
}
