<?php declare(strict_types=1);

namespace SocialNetwork;

require_once 'IObserver.php';

class Follower implements IObserver
{
    protected int $id;
    public function __construct(int $id){
        $this->id = $id;
    }

    public function update(IObservable $observable):void
    {
        throw new RuntimeException();
    }
    public function getID():int
    {
        return $this->id;
    }
}