<div class="row"><div class="col-lg-6">Create a New Account</div></div>
    <div class="row">
<div class="col-lg-4">
<form name="signin" id="signin" method="post" action="?controller=posts&action=add_user">
    <div class="form-group">
        <label for="title" >First Name: </label>
        <input type="text" name="first_name" class="form-control" id="first_name" required>
    </div>
       <div class="form-group">
            <label for="last_name" >Last Name: </label>
            <input type="text" name="last_name" class="form-control" id="last_name" required>
       </div>
       
        <div class="form-group">
            <label for="email" > Email Address: </label>
            <input type="email" name="email"  class="form-control" id="email" required>
        </div>
       <div class="form-group">
           <label for="password">  Password: </label>
            <input type="password" name="password" class="form-control" id="password" required>
            
       </div>
        <div class="form-group">
            <label for="verify_password">  Verify Password: </label>
           <input type="password" name="verify_password" id="verify_password" class="form-control" required  onChange="check_pass();">
            <div id="msg"></div>
        </div>
           
       
        
      <div class="form-group">
          <input type="submit" name="submit" id="submit" value="Sign Up" class="btn btn-default">
            <a href="?controller=pages&action=signin" class="btn btn-default">Back To Login</a>
      </div>
</form>
</div>


</div>
<script type="text/javascript">
    function check_pass() {
        var password= $("#password").val();
        var verify_password= $("#verify_password").val();
        if(password!= verify_password) {
            document.getElementById("msg").innerHTML= 'Passwords do not match';
            //$("#message").style.display='block';
        } else{
            //$("#msg").html= 'Passwords match';
            document.getElementById("msg").innerHTML= 'Passwords match';
           
        }

    }

    $(document).ready(function () {
   $("#verify_password").keyup(check_pass);
});
</script>