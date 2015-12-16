<?php

namespace Cjlabs\BlogServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CjlabsBlogServiceBundle:Default:index.html.twig');
    }
}
