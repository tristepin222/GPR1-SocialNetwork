<?php

namespace SocialNetwork;

require_once 'IObserver.php';

class Follower implements IObserver
{

    public function update(IObservable $observable):void
    {
        throw new RuntimeException();
    }
}