<?php

namespace Cjlabs\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CjlabsBlogBundle:Default:index.html.twig');
    }
}
