<?php

class Message
{
    public static $success = 'SUCCESS';
    public static $failure = 'FAILURE';
    public static $warning = 'WARNING';
    public static $note = 'NOTE';

    public static function printLine($message, $status = '')
    {
        $color = 'white';
        switch ($status) {
            case 'SUCCESS':
                $color = 'lightgreen';
                break;
            case 'FAILURE':
                $color = 'orange';
                break;
            case 'WARNING':
                $color = 'lightcoral';
                break;
            case 'NOTE':
                $color = 'lightblue';
                break;
            default:
                $color='white';
        }
        return "<p style='background-color:".$color." '>{$message}</p>>";
    }
}