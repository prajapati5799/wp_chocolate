<?php  
    /* 
    Template Name: Register 
    */  
    get_header(); 

    error_reporting(0);

?>

<?php
    if(isset($_POST['submit'])) {
       $userdata = array(      
                'user_login'  =>  $_REQUEST["user_login"],     
                'first_name'    =>  $_REQUEST["first_name"],
                'last_name'    =>  $_REQUEST["last_name"],
                'user_email'   =>  $_REQUEST["user_email"],                
        );
         
          
           var_dump(wp_insert_user( $userdata ));exit;

           $user_id = wp_insert_user( $userdata ) ;
        }
?>



<!-- <br>
<br>
<br><br>
<br>
<br><br>
<br>
<br>
  -->     

       
    <!-- <form name="contact" action="" method="post">
        <fieldset>
            <h4>user data!</h4>

              
                <input type="text" name="user_login" placeholder="user login">
                <input type="text" name="first_name" placeholder="first name">
                <input type="text" name="last_name" placeholder="last name">
                <input type="email" name="user_email" placeholder="email"/>   
                <input type="text" name="message" placeholder="message">
                <input class="btn" type="submit" name="submit"  class="submit" value="Send"/>
                
                
        </fieldset>
    </form> -->
    <form>
        <div class="form-group">
    <label for="exampleInputEmail1">User Login</label>
    <input type="text" class="form-control" id="user_login" name="user_login" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">email</label> 
    <input type="email" class="form-control" id="user_email" name="user_email"  >
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" id="user_pass" name="user_pass" aria-describedby="emailHelp" >
  </div> -->
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  
</form>


       
   
<?php get_footer(); ?>
  