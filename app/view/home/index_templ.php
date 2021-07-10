<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="simple mailing registration">
    <meta name="keywords" content="CSS, JavaScript, PHP">
    <meta name="author" content="justice foundation">
    <meta name="author" content="justice chimobi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Simple_mail_registeration</title>
</head>
<body>
    <form action="" method="POST" id="signupForm">
        <h1 class="header-title">Join our mailing list</h1>
        <?php if ( $status['message'] === 'User registered successfully!' ) :?>
            <p class="success status_msg response"><?= $status['message']; ?></p>
        <?php elseif ( $status['message'] === 'Please provide your username and valid email address' ) :?>
            <p class="notice status_msg response"><?= $status['message']; ?></p>
        <?php elseif ( $status['message'] === 'please provide a valid email address' ) :?>
            <p class="notice status_msg response"><?= $status['message']; ?></p> 
        <?php elseif ( $status['message'] === 'please provide a username' ) :?>
            <p class="notice status_msg response"><?= $status['message']; ?></p> 
        <?php elseif ( $status['message'] === 'please provide a email address' ) :?>
            <p class="notice status_msg response"><?= $status['message']; ?></p>            
        <?php endif; ?>
        <div id="form-container">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ;?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ;?>">
            </div>
            <div class="buttonHolder">
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>

    <script src="./js/index.js"></script>
</body>
</html>