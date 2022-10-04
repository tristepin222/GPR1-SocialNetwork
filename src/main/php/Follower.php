<?php

namespace SocialNetwork;

class Follower implements IObserver
{

    public function update(IObservable $observable)
    {
        throw new RuntimeException();
    }
}