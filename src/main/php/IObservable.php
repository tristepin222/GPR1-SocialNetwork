<?php

interface IObserver
{
    //Receive update from the observable
    public function update(IObservable $observable);
}