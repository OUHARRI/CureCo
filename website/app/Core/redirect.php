<?php

class redirect
{
    public static function admin()
    {
        if( !( isset($_SESSION['user']['id_u']) && isset($_SESSION['user']['firstName_u']) && $_SESSION['user']['isAdmin'] ) )
        {
            redirect('login');
            exit();
        }
    }
    public static function client()
    {
        if( !( isset($_SESSION['user']['id_u']) && isset($_SESSION['user']['firstName_u'])) )
        {
            redirect('login');
            exit();
        }
    }
}