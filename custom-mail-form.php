<?php
/*
Plugin Name: Custom Mail Form
Description: Adds a custom mail form to a specific page.
Version: 2.28
Author: Vlados
Author URI: https://epapa.hole
*/

function custom_mail_form()
{
    //Change page id if you need it
    if (is_page(6)) {
        wp_enqueue_style('custom-mail-form-style', plugins_url('style.css', __FILE__));
        wp_enqueue_script('custom-mail-form-script', plugins_url('script.js', __FILE__), array('jquery'), '1.0', true);
        echo '<div class="main-mail-container">';
        echo '<h2>MAIL FORM</h2>';
        echo '<form class="mail-form-fields" action="#" method="post" onsubmit="return validateForm()">';
        echo '<div class="mail-form-container" style="display: flex; flex-direction: column; max-width: 300px; width: 100%">';
        echo '<input class="custom-input" type="text" name="first_name" placeholder="First Name"/>';
        echo '<input class="custom-input" type="text" name="last_name" placeholder="Last Name"/>';
        echo '<input class="custom-input" type="text" name="subject" placeholder="Subject"/>';
        echo '<textarea class="custom-input" name="message" placeholder="Message"></textarea>';
        echo '<input class="custom-input" type="email" id="email-field" name="email" placeholder="E-mail" />';
        echo '<div id="incorrect-mail" class="custom-input">Incorrect email address. Please check it</div>';
        echo '<div id="success-mail" class="custom-input">Success</div>';
        echo '<input class="custom-input" type="submit" name="action" value="Send mail" />';
        echo '</div>';
        echo '</form>';
        echo '</div>';
    }
}

add_action('wp_footer', 'custom_mail_form');

function send_mail()
{
    if (isset($_POST['action']) && $_POST['action'] == 'Send mail') {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $subject = $_POST['subject'];
        $message = "HELLO DEAR ".$first_name." ".$last_name."\n".$_POST['message'];
        $email = $_POST['email'];
        $to = $email;
        $headers = "From: email@test.test\r\n";
        $headers .= "email@test.test\r\n";
        $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
        if (wp_mail($to, $subject, $message, $headers)) {
            error_log("MESSAGE: " . $message);
            echo '<script type="text/javascript">';
            echo 'document.querySelector("#success-mail").style.display = "block";';
            echo 'document.querySelector("#incorrect-mail").style.display = "none";';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'document.querySelector("#incorrect-mail").style.display = "block";';
            echo 'document.querySelector("#incorrect-mail").innerHTML = "Error sending email. Please try again later.";';
            echo 'document.querySelector("#success-mail").style.display = "none";';
            echo '</script>';
        }
    }
}

add_action('wp_footer', 'send_mail');
