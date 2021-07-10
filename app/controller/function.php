<?php

    function add_registered_user($username, $email) {
        file_put_contents('../private/mail_list.php', "$username: $email\n", FILE_APPEND);
    }

    function valid_email($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        return $email;
    }