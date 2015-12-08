<?php
  class Post {
    // define 6 attributes for the post
    // they are public so that we can access them using directly for example $post->author
    public $id;
    public $user_id;
    public $author;
    public $url;
    public $content;
    public $total_votes;

    public function __construct($id, $user_id, $author, $url,$content, $total_votes) {
      $this->id      = $id;
      $this->user_id= $user_id;
      $this->author  = $author;
      $this->url= $url;
      $this->content = $content;
      $this->total_votes= $total_votes;
    }


    public static function all() {
      $list = array();
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM posts ORDER BY created_time desc');

      // create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['id'],$post['user_id'], $post['author'],$post['url'], $post['content'], $post['total_votes']);
      }

      return $list;
    }


    public static function submit_link() { // for submitting the newly created link into the database
    $db = Db::getInstance();
    if(isset($_REQUEST['submit'])) {
    $title= $_REQUEST['title']; // submitted from the form
    $url= $_REQUEST['url'];    // submitted from the form
    $user_id= $_REQUEST['user_id'];   // submitted from the form hidden field
    $author= $_REQUEST['author'];   // submitted from the form hidden field
    $sql= $db->query("Insert into posts(user_id, author, url, content,created_date, created_time) values('".$user_id."', '".$author."', '".$url."', '".$title."',NOW(),CURRENT_TIMESTAMP())");
}

    }

    public static function add_user() {  // for adding new users
        $db = Db::getInstance();
        if(isset($_REQUEST['submit'])) {
           $sql= $db->query("Insert into users(first_name, last_name, email,password,created_date, created_time) values('".$_REQUEST['first_name']."', '".$_REQUEST['last_name']."', '".$_REQUEST['email']."','".$_REQUEST['password']."',NOW(),CURRENT_TIMESTAMP())");
        }
    }

    public static function check_login() {  // for checking the login credentials
        $db = Db::getInstance();
        if(isset($_REQUEST['submit'])) {
           // print_r($_REQUEST);
            $sql= "Select * from users where email='".$_REQUEST['username']."' and password='".$_REQUEST['password']."'";
            $result= $db->query($sql);
            $num= $result->fetchColumn();
            if($num>0) {
                foreach($db->query($sql) as $row) {
                   // echo $row['email'];
                   $_SESSION['session_email']= $row['email'];
                   $_SESSION['session_user_id']= $row['user_id'];
                   $_SESSION['session_first_name']= $row['first_name'];
                   $_SESSION['session_last_name']= $row['last_name'];

                }
            } 
            
        }
    }

    public static function logout() {
        unset($_SESSION['session_email']);
        unset($_SESSION['session_user_id']);
        unset($_SESSION['session_first_name']);
        unset($_SESSION['session_last_name']);

    }
   
  }
?>