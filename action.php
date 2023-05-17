<?php

require_once 'vendor/autoload.php';

use App\classes\Auth;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    } elseif ($_GET['page'] == 'sign-in')
    {
        include 'pages/signIn.php';
    } elseif ($_GET['page'] == 'user-sign-in')
    {
        $auth = new Auth($_POST);
        $message = $auth->signIn();
        include 'pages/signIn.php';
    } elseif ($_GET['page'] == 'logout')
    {
        $auth = new Auth();
        $message = $auth->signOut();
    }
}