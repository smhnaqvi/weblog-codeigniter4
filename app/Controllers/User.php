<?php


namespace App\Controllers;


class User extends BaseController
{
    function index()
    {
        return view("users-manager");
    }

}