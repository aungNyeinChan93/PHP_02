<?php 
declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors","1");

interface AdminInterface{
    public function create();
}

interface UserInterface{
    public function edit();
}

interface SuperAdminInterface{
    public function delete();
}

class Admin implements AdminInterface{
    public function create(){
        echo __CLASS__." create account!<br>";
    }
}

class User implements UserInterface{
    public function edit(){
        echo __CLASS__." edit account!<br>";
    }
}

class SuperAdmin implements SuperAdminInterface{
    public $admin;
    public static $user;
    public function __construct(AdminInterface $admin, UserInterface $user){
        $this->admin = $admin;
        self::$user = $user;
    }
    public function delete(){
        echo __CLASS__. " delete account!<br>";
    }
};

$superAdmin = new SuperAdmin(new Admin(),new User());
$superAdmin->delete();
$superAdmin->admin->create();
SuperAdmin::$user->edit();