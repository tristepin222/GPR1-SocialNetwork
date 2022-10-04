<?php

namespace SocialNetwork;

use RuntimeException;

require 'IObservable.php';

class Twitter implements IObservable
{
    public function __construct(){}

    public function subscribe(array $observers):void
    {
        throw new RuntimeException();
    }

    public function unsubscribe(IObserver $observer):void
    {
        throw new RuntimeException();
    }

    public function notifyObservers():void
    {
        throw new RuntimeException();
    }

    public function getObservers():array
    {
        throw new RuntimeException();
    }
}

class TwitterException extends RuntimeException { }
class EmptyListOfSubscribersException extends TwitterException { }
class SubscriberAlreadyExistsException extends TwitterException { }
class SubscriberNotFoundException extends TwitterException { }
