<?php
require_once('controllers/base_controller.php');
require_once('models/post.php');

class PostsController extends Base_Controller
{
  function __construct()
  {
    
  }
  public function index()
  {
    $posts = Post::all();
    $this->view('index', ['post' => $posts]);
  }
    public function showPost()
    {
      $post = Post::find($_GET['id']);
      $this->view('show', ['page' => $post]);
    }
}