<?php

namespace SocialNetwork;

interface IObserver
{
//Receive update from the observable
public function update(IObservable $observable);
}