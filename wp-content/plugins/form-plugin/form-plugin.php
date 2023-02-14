<?php
/**
 * Form Plugin
 *
 * Plugin Name: Form Plugin1
 * Plugin URI:  https://wordpress.org/plugins/
 * Description: Enables the WordPress classic editor and the old-style Edit Post screen with TinyMCE, Meta Boxes, etc. Supports the older plugins that extend this screen.
 * Version:     1.6.2
 * Author:      WordPress Contributors
 * Author URI:  https://github.com/WordPress/
 * Text Domain: form-plugin
 * Domain Path: /languages
 * Requires PHP: 5.2.4
 */

// The shortcode function
function DisplayCustomSettingsForm_shortcode() { 
  ?>
<!-- // Advertisement code pasted inside a variable -->
<section id="lwCSForm-wrapper">
                    <form name="lwCSForm" id="lwCSForm" method="post" action="<?php the_permalink(); ?>" autocomplete="on">
                        Name: <input type="text" name="realname" placeholder="Your Name" >

                       Content: <input type="textarea" name="content" placeholder="content" >

                        <input type="submit" name="lwCSFormSubmit">
                    </form>
                </section>
         <br /> 
         
         <!-- END LwCSForm Plugin-->
<?php
}
add_shortcode( 'lwCSForm', 'DisplayCustomSettingsForm_shortcode');
 


  

