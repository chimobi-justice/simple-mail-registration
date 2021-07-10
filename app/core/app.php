<?php

    $status = ['message' => ''];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);

        if ( empty($username) || empty($email) ) {
            $status['message'] = 'Please provide your username and valid email address';
            if ( (valid_email($email) && !$username) ) {
                $status['message'] = 'please provide a username';
            } elseif ( $username && !$email ) {
                $status['message'] = 'please provide a email address';
            } 
        } else  {
            add_registered_user($username, $email);
            $status['message'] = 'User registered successfully!'; 
            if ( !valid_email($email) ) {
                $status['message'] = 'please provide a valid email address';
            }    
        }
    }