<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php'); // requires the specific controller file

    switch($controller) {
      case 'pages':
        $controller = new PagesController();  // creates an object of the PagesController()
      break;
      case 'posts':
        // we need the model to query the database later in the controller
        require_once('models/post.php');
        $controller = new PostsController();   // creates an object of the PostsController
      break;
    }

    $controller->{ $action }();  // calls the specific function in post.php
  }

  //  adding an entry for the new controller and its actions

  $controllers= array('pages'=> array('error','signin','signup','logout'),'posts'=> array('add','home','index','show','submit_link','add_user','check_login'));
 // print_r($controllers);
  if (array_key_exists($controller, $controllers)) {  // checks whether the controller is present in array
    if (in_array($action, $controllers[$controller])) { // checks whether the action is present in the controller array
      call($controller, $action);  // calls the function call() with parameters
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>