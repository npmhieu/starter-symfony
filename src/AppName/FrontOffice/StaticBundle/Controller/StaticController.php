<?php

namespace AppName\FrontOffice\StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StaticController extends Controller
{
    public function aboutUsAction()
    {
        return $this->render('StaticBundle:static:about_us.html.twig');
    }

    public function contactUsAction()
    {
        return $this->render('StaticBundle:static:contact_us.html.twig');
    }

    public function termOfUseAction()
    {
        return $this->render('StaticBundle:static:term_of_use.html.twig');
    }

    public function privacyPolicyAction()
    {
        return $this->render('StaticBundle:static:privacy_policy.html.twig');
    }

    public function faqAction()
    {
        return $this->render('StaticBundle:static:faq.html.twig');
    }

    public function supportAction()
    {
        return $this->render('StaticBundle:static:support.html.twig');
    }
}
