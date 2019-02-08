<?php

namespace HeavenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HeavenBundle:Default:index.html.twig');
    }
}
