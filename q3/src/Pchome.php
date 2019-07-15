<?php

class Pchome implements SubscriberInterface
{
    public function notify(String $msg)
    {
        echo static::class . $msg;
    }
}
