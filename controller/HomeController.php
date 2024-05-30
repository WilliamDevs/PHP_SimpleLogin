<?php 


class HomeController{
    public $model;

    public function indexAction(){

        if(isset($_POST['LoginSubmit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];


            $checkUserLogin = $this->model->CheckUserLogin($username,$password);
            if ($checkUserLogin==1) {
                $_SESSION['userLogInStatus']=1
                # code...
            }
        }

        $this->routeManager();
    }

    public function routeManager(){
        if(isset($_SESSION['userLogInStatus'])){
            return require_once('views/dashboard.php');
        }
        return require_once('views/login.php');
    }

} 