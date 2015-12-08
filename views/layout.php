
<DOCTYPE html>
<html>
  <head>
  </head>
  <body>

  <ul class="nav nav-tabs">
  <?php if($controller=='posts' && $action!='add_user') { ?><li role="presentation" class="active"><a href="/php_mvc">Home</a></li><?php } ?>
   <?php if($controller=='posts' && $action!='add_user') { ?> <li role="presentation"><a href="?controller=posts&action=index">All Links</a></li><?php } ?>
  <?php if($controller=='posts' && $action!='add_user') { ?><li role="presentation"><a href="?controller=posts&action=add">Submit a Link</a></li><?php } ?>
  <?php if($controller=='posts' && $action!='add_user') { ?><li role="presentation"><a href="?controller=pages&action=logout">Logout</a></li><?php } ?>
</ul>

    <?php require_once('routes.php'); // we can determine what view to we need depending on our previosly set controller and action parameters
    ?>

    
  <body>
</html>