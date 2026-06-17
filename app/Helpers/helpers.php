<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

function getFullName($userModel = null, $defaultReturn = "N/a"): string
{
    if ($userModel) {
        if (is_array($userModel) && ($userModel['first_name'] || $userModel['last_name'])) {
            return $userModel['first_name'] . ' ' . $userModel['last_name'];
        }
        if ($userModel->first_name || $userModel->last_name) {
            return $userModel->first_name . ' ' . $userModel->last_name;
        } else {
            return $defaultReturn;
        }
    }
    if (Auth::user()) {
        return Auth::user()->first_name . ' ' . Auth::user()->last_name;
    }
    return $defaultReturn;
}

function isActiveRoute($routeName, $subRoot = false, $param = [], $className = "active")
{
    if (is_array($routeName)) {
        $hasRoute = false;
        foreach ($routeName as $name) {
            $route = trim(route($name, $param, false), '/');
            if ($subRoot) {
                $route = $route . '*';
            }
            if (Request::is($route)) {
                $hasRoute = true;
            }
        }
        return $hasRoute ? $className : null;
    } else {
        $route = trim(route($routeName, $param, false), '/');
        if ($subRoot) {
            $route = $route . '*';
        }
        return Request::is($route) ? $className : null;
    }
}
