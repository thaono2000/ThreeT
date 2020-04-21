<?php
class PagesController extends Base_Controller
{
  public function home()
  {
    session_start();
    if(empty($_SESSION['username'])){
        $this->view('application', ['page' => 'home']);
    }
    else{
        header('Location: index.php');
    }
  }
}