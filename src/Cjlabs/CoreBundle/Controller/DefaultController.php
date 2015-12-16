<?php

namespace Cjlabs\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CjlabsCoreBundle:Default:index.html.twig');
    }
}
