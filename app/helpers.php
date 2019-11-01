<?php
/**
 * Created by PhpStorm.
 * User: yizhou
 * Date: 2019-11-01
 * Time: 11:09
 */


function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function category_nav_active($category_id)
{
    return active_class((if_route('categories.show') && if_route_param('category', $category_id)));
}