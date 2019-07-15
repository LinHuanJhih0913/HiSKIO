<?php

class Shopee implements SubscriberInterface
{
    public function notify(String $msg)
    {
        echo static::class . $msg;
    }
}
