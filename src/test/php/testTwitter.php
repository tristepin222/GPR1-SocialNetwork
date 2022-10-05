<?php

namespace TestSocialNetwork;
use PHPUnit\Framework\TestCase;
use SocialNetwork\Twitter;

require '..\..\main\php\Twitter.php';

# Require for Visual studio Code
# require 'src\main\php\Twitter.php';

class testTwitter extends TestCase
{
    //region private attributes
    private Twitter $twitter;
    //endregion private attributes

    public function setup():void
    {
        $this->twitter = new Twitter();
    }

    public function test_Observers_AfterInstantiationWithoutObservers_Success()
    {
        //given
        //refer to Setup method
        $expectedAmountOfObservers = 0;

        //when
        //event is called directly by the assertion

        //then
        $this->assertEquals($expectedAmountOfObservers, Count($this->twitter->getObservers()));
    }

    public function test_Observers_AfterInstantiationWithObservers_Success()
    {
        //given
        //refer to Setup method
        $expectedAmountOfObservers = 0;

        //when
        //event is called directly by the assertion

        //then
        $this->assertEquals($expectedAmountOfObservers, Count($this->twitter->getObservers()));
    }

    //region private methods
    private function generateObservers($amountOfObserversToCreate):array
    {
        $observers = array();
        for ($i=0 ; $i <= $amountOfObserversToCreate ; $i++)
        {
            $observers->add(new Follower());
        }
        return $observers;
    }
    //endregion private methods


}
