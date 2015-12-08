<div class="row">
<div class="col-lg-4">
<form name="submit_link" id="submit_link" method="post" action="?controller=posts&action=submit_link">
    
        <div class="form-group">
                 <label for="title" >Title: </label>
                <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="url" >URL: </label>
            <input type="text" name="url" id="url" class="form-control" required>
        </div>
        <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['session_user_id'] ?>">
        <input type="hidden" name="author" id="author" value="<?php echo $_SESSION['session_first_name'] ?>">
    <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-default" value="Submit">
    </div>
</form>
  
</div>
</div>

