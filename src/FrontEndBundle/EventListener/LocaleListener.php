<?php

/**
 * Created by PhpStorm.
 * User: Neti
 * Date: 25/06/2015
 * Time: 14:18.
 */
namespace FrontEndBundle\EventListener;

use BackEndBundle\Entity\CurrencyRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Tag( name="kernel.event_subscriber")
 */
class LocaleListener implements EventSubscriberInterface
{



    private $defaultCurrency;
    private $defaultLocale;

    public function __construct($defaultLocale = 'en', CurrencyRepository $currencyRepository)
    {
        $this->defaultLocale = $defaultLocale;
        $this->defaultCurrency = $currencyRepository->getDefaultCurrency();
    }

    public function onKernelRequest(GetResponseEvent $event)
    {

        $request = $event->getRequest();
        if (!$request->hasPreviousSession()) {
            return;
        }

        // try to see if the locale has been set as a _locale routing parameter
        if ($locale = $request->attributes->get('_locale')) {
            $request->getSession()->set('_locale', $locale);
        } else {
            // if no explicit locale has been set on this request, use one from the session
            $request->setLocale($request->getSession()->get('_locale', $this->defaultLocale));
        }


        // try to see if the locale has been set as a _locale routing parameter
        if (!$request->getSession()->get('_currency')) {
            $request->getSession()->set('_currency', $this->defaultCurrency);
        }
    }

    public static function getSubscribedEvents()
    {
        return array(
            // must be registered before the default Locale listener
            KernelEvents::REQUEST => array(array('onKernelRequest', 17)),
        );
    }
}
