<?php 
    if(is_user_logged_in()) {
        wp_redirect( home_url() );
        exit;
    }
?>
<?php
/**
 * Template Name:login
 */

get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="format-detection" content = "telephone=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Chocalate</title>
    <link rel="icon" href="assets/images/favicon.ico">
</head> 

<body>
  

        
        <div id="content" class="registration">
            
            <section class="inner-content">
                <div class="container">
                    <?php //if( ! is_user_logged_in() ): ?>
                    <!-- ****************** Login Section   ****************** -->
                    <div class="row">
                        <form class="login-form" name="login-form" id="login-form" method="POST">
                            <?php echo wp_nonce_field( 'user-login', '_nonce' ); ?>

                        <div class="col-md-offset-3 col-md-6">
                            <div class="heading-row">
                                <h1>Already Registered?</h1>
                                <p>If you have an account with us, please log in.</p>
                            </div>
                            <div class="form-content">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label class="label_check" for="checkbox-01">
                                        <input name="sample-checkbox-01" id="checkbox-01" value="1" type="checkbox" checked="">Remember Me What's this?
                                    </label>
                                </div>
                                <div class="form-group btn-area">
                                    <button type="submit" class="btn btn-info btn-large">Sign In</button>
                                    <a href="#" class="btn-link">Forgot Your Password?</a> 
                                </div>
                            </div>
                            <div class="heading-row">
                                <h1>New Here?</h1>
                                <p>Registration is free and easy!</p>
                                <a href="<?php echo home_url('registor') ; ?>" class="btn btn-detail btn-large">Create an Account</a>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </section>
            
        </div>


<?php get_footer(); ?>