<?php
namespace App\Controllers\App;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function __construct()
    {
        helper('core');
    }

    public function login() {

    }

    public function register() {
        $layout['title'] = 'Đăng ký';

        return view(VIEW_APP.'user/register', $layout);
    }

    public function register_ajax() {

    }
}