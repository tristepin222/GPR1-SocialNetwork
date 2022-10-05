<?php

namespace SocialNetwork;

use RuntimeException;

require 'IObservable.php';

class Twitter implements IObservable
{
    protected $Observers;
    public function __construct(){
        
       $this->Observers = array();
      
    }

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
      
        return $this->Observers;
    }
}

class TwitterException extends RuntimeException { }
class EmptyListOfSubscribersException extends TwitterException { }
class SubscriberAlreadyExistsException extends TwitterException { }
class SubscriberNotFoundException extends TwitterException { }
