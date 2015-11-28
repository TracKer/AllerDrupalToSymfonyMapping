<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
      $articles = $this->getDoctrine()->getRepository('AppBundle:Node')->findBy(
        array('type' => 'article'),
        array(),
        10
      );

      return $this->render('default/index.html.twig');


    }
}
