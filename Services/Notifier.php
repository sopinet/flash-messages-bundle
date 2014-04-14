<?php

namespace Sopinet\NotifierBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class Notifier{

	public function addFlashMessages($type = 'success', $message = 'Sopinet NotifierBundle'){

	$session = new Session();
	$session->getFlashBag()->add($type, $message);
	}
}