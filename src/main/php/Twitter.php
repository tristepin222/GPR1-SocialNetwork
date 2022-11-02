<?php

namespace SocialNetwork;

use RuntimeException;

require 'IObservable.php';

class Twitter implements IObservable
{
    protected $Observers;
    public function __construct($observers = null)
    {
        if (isset($observers)) {
            $this->Observers = $observers;
        } else {
            $this->Observers = array();
        }
    }

    public function subscribe(array $observers): void
    {
        
        $this->Observers = array_push( $this->Observers, $observers);
    }

    public function unsubscribe(IObserver $observer): void
    {
    }

    public function notifyObservers(): void
    {
        if(count($this->Observers) == 0){
            throw new EmptyListOfSubscribersException();
        }
    }

    public function getObservers(): array
    {

        return $this->Observers;
    }
    public function getTwits(): array
    {

        return $this->Observers;
    }
}

class TwitterException extends RuntimeException
{
}
class EmptyListOfSubscribersException extends TwitterException
{
}
class SubscriberAlreadyExistsException extends TwitterException
{
}
class SubscriberNotFoundException extends TwitterException
{
}
