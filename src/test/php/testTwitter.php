<?php

namespace TestSocialNetwork;
use PHPUnit\Framework\TestCase;


class testTwitter extends TestCase
{
    //region private attributes
    private Twitter $twitter;
    //endregion private attributes

    public function void setup()
    {
        $this->twitter = new Twitter();
    }

}
