Login to the Application:
<div class="row">
<div class="col-lg-2">
<form name="signin" id="signin" method="post" action="?controller=posts&action=check_login">
   <div class="form-group">
       <label for="username" >Username: </label>
       <input type="username" name="username" id="username" class="form-control" required>
   </div>
    <div class="form-group">
        <label for="password" > Password: </label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" id="submit" value="Login" class="btn btn-default">
        <a href='?controller=pages&action=signup' class="btn btn-default">Sign Up</a>
    </div>
             
       
</form>
</div>
</div>