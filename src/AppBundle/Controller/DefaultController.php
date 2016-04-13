<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $grader = $this->get('app.grade_calculator');
        $val = $grader->runPython();
        // replace this example code with whatever you need
        return $this->render('AppBundle:default:index.html.twig', ['grade' => $val]);
    }

    /**
     * @Route("/editor", name = "editor")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editorAction(Request $request)
    {
        return $this->render('@App/default/editor.html.twig');
    }
}
