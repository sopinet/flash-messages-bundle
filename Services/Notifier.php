<?php

namespace Sopinet\FlashMessagesBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class FlashNotifier{

	public function addFlashMessages($type = 'success', $message = 'Sopinet NotifierBundle'){

	$session = new Session();
	$session->getFlashBag()->add($type, $message);
	}
}