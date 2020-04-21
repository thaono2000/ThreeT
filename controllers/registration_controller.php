<?php
    require_once 'controllers/base_controller.php';
    require_once 'models/registration.php';
    class RegistrationController extends BaseController {
        private $result;
        private $input;
        function __construct()
        {
            
        }
        function registration(){
            if(isset($_REQUEST['registration'])){
                if($this->isNull()){
                    $this->result = 'Bạn chưa nhập đủ thông tin';
                }elseif( registration::reg($this->input) ){
                    $this->result = 'Đăng ký thành công';
                }else{
                    $this->result = 'Tên đăng nhập đã tồn tại';
                }
            }
            
            $this->view('application', ['page' => $this->result]);
        }
        function isNull(){
                $this->input = array(
                    'userName'=> $_REQUEST ['userName'],
                    'password'=> $_REQUEST ['password'],
                    'firstName'=> $_REQUEST['firstName'],
                    'lastName'=> $_REQUEST['lastName'],
                    'age'=> $_REQUEST['age'],
                    'contactNo'=> $_REQUEST['contactNo'],
                    'sex'=> $_REQUEST['sex'],
                    'bloodGroup'=> $_REQUEST['bloodGroup'],
                    'height'=> $_REQUEST['height'],
                    'weight'=> $_REQUEST['weight'],
                    'address'=> $_REQUEST['address']
                );

                if( $this->input['userName'] == '' || $this->input['password'] == '' || $this->input['firstName'] == '' || $this->input['lastName'] == '' || $this->input['age'] == '' || $this->input['contactNo'] == '' || $this->input['sex']  == '' || $this->input['height']  == '' || $this->input['weight']  == '' || $this->input['address'] == '' || $this->input['bloodGroup']  == '' ){
                    return true;
                }else{
                    return false;
                }
        }
    }