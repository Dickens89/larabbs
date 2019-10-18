<?php
/**
 * Created by PhpStorm.
 * User: yizhou
 * Date: 2019-10-18
 * Time: 19:33
 */

 function route_class()
 {
     return str_replace('.', '-', Route::currentRouteName());
 }