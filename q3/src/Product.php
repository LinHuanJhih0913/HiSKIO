<?php

class Product
{
    protected $subscriberList = [];

    public function attach(SubscriberInterface $subject)
    {
        $this->subscriberList[get_class($subject)] = $subject;
    }

    public function detach(SubscriberInterface $subject)
    {
        unset($this->subscriberList[get_class($subject)]);
    }

    public function publish($msg)
    {
        if (count($this->subscriberList) === 0) {
            echo "empty list\n";
        }

        foreach ($this->subscriberList as $item) {
            $item->notify($msg);
        }
    }
}
