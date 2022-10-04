<?php

namespace SocialNetwork;

class Twitter implements IObservable
{

    public function subscribe(array $observers)
    {
        throw new RuntimeException();
    }

    public function unsubscribe(IObserver $observer)
    {
        throw new RuntimeException();
    }

    public function notifyObservers()
    {
        throw new RuntimeException();
    }
}

class TwitterException extends RuntimeException { }
class EmptyListOfSubscribersException extends TwitterException { }
class SubscriberAlreadyExistsException extends TwitterException { }
class SubscriberNotFoundException extends TwitterException { }
