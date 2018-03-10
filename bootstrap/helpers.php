<?php
/**
 * Created by PhpStorm.
 * User: jiayao
 * Date: 18-2-17
 * Time: 下午8:29
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}