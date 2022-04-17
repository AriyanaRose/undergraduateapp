<?php

class Point
{

    private const POINT_PER_DOLLAR = 1;


    public static function getPoints($total){
        return intval($total * self::POINT_PER_DOLLAR);
    }

    public static function getDiscountAmount($points_used){
        switch ($points_used) {
            case '200':
                return 20;
                break;

            case '300':
                return 30;
                break;

            case '400':
                return 40;
                break;

            case '500':
                return 50;
                break;

            case '1000':
                return 100;
                break;

            case '1500':
                return 150;
                break;
            
            case '2000':
                return 200;
                break;

            default:
                return 0;
                break;
        }
    }
}
