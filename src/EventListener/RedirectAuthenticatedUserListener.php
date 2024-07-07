<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Security;

class RedirectAuthenticatedUserListener
{
    private $security;
    private $router;

    public function __construct(Security $security, RouterInterface $router)
    {
        $this->security = $security;
        $this->router = $router;
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();
        $currentRoute = $request->attributes->get('_route');

        if ($currentRoute === 'app_login' && $this->security->getUser()) {
            $event->setResponse(new RedirectResponse($this->router->generate('app_home')));
        }
    }
}
