<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include('connection.php');

if (isset($_GET['controller']) && isset($_GET['action'])) {  // check if the controller and action parameters are set in the query string
    $controller = $_GET['controller'];  // initialize the controller
    $action     = $_GET['action'];      // initialize the action
  } else {
    $controller = 'pages';
   // $action     = 'home';
    if(isset($_SESSION['session_user_id'])) {  // check if the session variable is set for the user
        $controller= 'posts'; // if yes then set the controller to 'posts'
        $action= 'home';   // if yes then set the action to 'home' for rendering the home page
    } else {
        $action= 'signin';
    }
  }

  require_once('views/layout.php');
?>
