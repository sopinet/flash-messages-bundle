<?php

namespace Sopinet\FlashMessagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SopinetFlashMessagesBundle:Default:index.html.twig', array('name' => $name));
    }
}
