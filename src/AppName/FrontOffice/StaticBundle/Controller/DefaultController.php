<?php

namespace AppName\FrontOffice\StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StaticBundle:Default:index.html.twig');
    }
}
