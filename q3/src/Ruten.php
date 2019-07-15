<?php

class Ruten implements SubscriberInterface
{
    public function notify(String $msg)
    {
        echo static::class . $msg;
    }
}
