<?php
$name = "";
$email = "";
$message = "";

if (isset($alert["error"])) {
    $name = recoverPost("name");
    $email = recoverPost("email");
    $message = revoverPost("message");
}

?>
<div class="container">
    <?php
        if (isset($alert["error"])) {
            echo $alert["error"];
        } elseif (isset($alert["success"])) {
            echo $alert["success"];
        }
    ?>
    
    <form class="form-signin" role="form" method="post" action="<?php path("contact/send"); ?>">
        <h2 class="form-signin-heading"><?php echo __("Contact Us"); ?></h2>
        
        <h4><?php echo __("Questions? Comments? Let us know!"); ?></h4>
        
        <p>
            <input value="<?php echo $name; ?>" name="name" type="name" class="form-control" placeholder="Name" required autofocus>
        </p>

        <p>
            <input value="<?php echo $email; ?>" name="email" type="email" class="form-control" placeholder="Email" required>
        </p>

        <p>
            <textarea value="<?php echo $message; ?>" name="message" style="height: 160px;" placeholder="<?php echo __("Write your message here..."); ?>"></textarea>
        </p>
        
        <p>
            <button name="send" class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
        </p>
    </form>
</div>