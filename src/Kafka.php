<?php

namespace Kmsoil\Kafka;

class Kafka
{
    private static $partition = 0;

    public static function produce($topic, $message = '')
    {
        echo 'This is just a warm-up.';
        return;
    }
}