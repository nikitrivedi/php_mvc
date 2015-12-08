<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 class PagesController {

    public function error() {
      require_once('views/pages/error.php'); //Renders the view error.php
    }

     public function signin() {
        require_once('views/pages/signin.php');  // Renders the signin.php page
    }

    public function signup() {
        require_once('views/pages/signup.php');  // Renders the signup.php page
    }

    public function logout() {  // unsets the session variables
        unset($_SESSION['session_email']);
        unset($_SESSION['session_user_id']);
        unset($_SESSION['session_first_name']);
        unset($_SESSION['session_last_name']);
        require_once ('views/pages/signin.php');


   }
  }
?>
