<?php

namespace AppName\FrontOffice\MasterLayoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MasterLayoutBundle:Default:index.html.twig');
    }
}
