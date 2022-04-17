<?php

class Point
{

    private const POINT_PER_DOLLAR = 1;


    public static function getPoints($total){
        return intval($total * self::POINT_PER_DOLLAR);
    }

    public static function getDiscountAmount($points_used){
        switch ($points_used) {
            case '100':
                return 5;
                break;

            case '200':
                return 10;
                break;

            case '300':
                return 15;
                break;

            case '500':
                return 25;
                break;

            case '1000':
                return 1000;
                break;

            default:
                return 0;
                break;
        }
    }
}
