<?php

namespace AppName\FrontOffice\HomepageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        return $this->render('HomepageBundle:homepage:index.html.twig');
    }
}
