<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="adminDashboard")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    /**
     * @Route("/admin/courses", name="admin.viewCourses")
     */
    public function viewCoursesAction()
    {
        return $this->render("@Admin/Courses/courses.html.twig");
    }
}
