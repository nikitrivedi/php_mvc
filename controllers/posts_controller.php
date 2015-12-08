<?php
  class PostsController {
      
      public function home() {
         // $posts = Post::home();
          //print_r($posts);
          require_once('views/posts/home.php');
      }

      public function index() {
      // we store all the posts in a variable
      $posts = Post::all();
      require_once('views/posts/index.php');
    }

    

    public function submit_link(){   // for submitting the link created to the database
        $submit_link= Post::submit_link();
        $posts = Post::all();
        require_once ('views/posts/index.php');
    }

   public function add_user() {
       $add_user= Post::add_user();  // for aading a new user to the database
       //$posts = Post::all();
       require_once ('views/pages/signin.php');
   }

   public function check_login() {  // for checking the login credentials
       $check_login= Post::check_login();
      
       require_once('views/posts/home.php');
       

       
   }

   public function add() {               // for opening up the form for adding a  new link
        require_once('views/posts/add.php');
    }

   

  }
?>