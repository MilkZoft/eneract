<?php
$name = "";
$email = "";
$message = "";

if (isset($alert["error"])) {
    $name = recoverPOST("name");
    $email = recoverPOST("email");
    $message = recoverPOST("message");
}

?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <div class="container">
                <form class="form-signin" role="form" method="post" action="<?php echo path("contact/send"); ?>">
                    <h2 class="form-signin-heading"><?php echo __("Contact Us"); ?></h2>
                    
                    <h4><?php echo __("Questions? Comments? Let us know!"); ?></h4>

                    <?php
                    if (isset($alert["error"])) {
                        echo $alert["error"];
                    } elseif (isset($alert["success"])) {
                        echo $alert["success"];
                    }
                    ?>
                    
                    <p>
                        <input value="<?php echo $name; ?>" name="name" type="name" class="form-control" placeholder="Name" required autofocus>
                    </p>

                    <p>
                        <input value="<?php echo $email; ?>" name="email" type="email" class="form-control" placeholder="Email" required>
                    </p>

                    <p>
                        <textarea value="<?php echo $message; ?>" class="form-control" name="message" style="height: 160px;" placeholder="<?php echo __("Write your message here..."); ?>"></textarea>
                    </p>
                    
                    <p>
                        <button name="send" value="Submit" class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>