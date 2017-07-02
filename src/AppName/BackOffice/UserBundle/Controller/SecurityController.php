<?php

namespace AppName\BackOffice\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    public function loginAction()
    {
        return $this->render('UserBundle:security:index.html.twig');
    }
}
