<?php
    class login_controller extends Base_Controller{
        private $notification;
        public function __construct()
        {
            
        }
        function login(){
            $this->model('login');
            if( isset($_REQUEST['login']) ){
                $username = $_REQUEST['username'];
                $password = $_REQUEST['password'];
                $loginType = $_REQUEST['loginType'];
                if(!empty($username) and !empty($password) and !empty($loginType))
                {
                    if( Login::verify($username,$password,$loginType)){
                        session_start();
                        $_SESSION['username'] = $username;
                        header('Location: index.php?controller=application&action=home');
                    }else{
                        $this->notification = 'Tên đăng nhập hoặc mật khẩu chưa đúng';
                    }
                }else{
                    $this->notification = 'Chưa nhập đủ thông tin';
                }
            }           
            $this->view('lr',['notification' => $this->notification,'page' => 'login']);
            
        }
        function logout(){
                session_start();
                $_SESSION = array();
                session_destroy();
                header('Location: index.php');
        }
    }