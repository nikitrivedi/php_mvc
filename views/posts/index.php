<p>Here is a list of all links posted:</p>

<table class="table table-striped">
<?php 
$count=1;
foreach($posts as $post) {
    
    ?>
    <tr>
        <td><h5><?php echo $count; ?></h5></td>
        <td id="upvote_postid_<?php echo $post->id; ?>"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true" id="upvote_<?php echo $post->user_id; ?>"  <?php if($_SESSION['session_user_id']!=$post->user_id) { ?>onclick="upvote(this.id);" style="cursor: pointer;"<?php } ?>></span></td>
        <td><div id="total_votes_<?php echo $post->id; ?>"><?php echo $post->total_votes; ?></div></td>
        <td id="downvote_postid_<?php echo $post->id; ?>"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true" id="downvote_<?php echo $post->user_id; ?>" <?php if($_SESSION['session_user_id']!=$post->user_id) { ?>onclick="downvote(this.id);" style="cursor: pointer;"<?php } ?>></span></td>
        <td> <h5><a target="_blank" href='https://<?php echo $post->url; ?>'><?php echo $post->content; ?></a></h5></td>
        <td><input type="hidden" name="total_votes_db_<?php echo $post->id; ?>" id="total_votes_db_<?php echo $post->id; ?>" value="<?php echo $post->total_votes; ?>" </td>
       
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>submitted by <?php echo $post->author; ?></td>
    </tr>
    
<!--    <a href='?controller=posts&action=show&id=<?php //echo $post->id; ?>'>See content</a>-->
 
<?php 
$count++;
}
?>
</table>

<script type="text/javascript">
    function upvote(id) {  //function for incrementing the vote count by 1
        
        var span_element= document.getElementById(id);  //span element
        var post_id_str= span_element.parentNode.id;        // get the post_id
        var split_post_id= post_id_str.split('_');
        var post_id= split_post_id[2];
        var user_id_str= id;
        var user_id_split= user_id_str.split('_');
        var user_id= user_id_split[1];
        //alert(post_id+ user_id);
      
       
       document.getElementById("total_votes_"+post_id).innerHTML= Number(document.getElementById("total_votes_db_"+post_id).value)+1;

       var total_votes= document.getElementById("total_votes_"+post_id).innerHTML;
        
    }

function downvote(id) {   // function for decrementing the vote count by 1
        var span_element= document.getElementById(id);  //span element
        var post_id_str= span_element.parentNode.id;        // get the post_id
        var split_post_id= post_id_str.split('_');
        var post_id= split_post_id[2];
        var user_id_str= id;
        var user_id_split= user_id_str.split('_');
        var user_id= user_id_split[1];
        //alert(post_id+ user_id);
        if(document.getElementById("total_votes_db_"+post_id).value>0) {
       document.getElementById("total_votes_"+post_id).innerHTML= Number(document.getElementById("total_votes_db_"+post_id).value)-1;
        }
     

}
</script>