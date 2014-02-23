<?php
$name = '';
$email = '';
$message = '';

if (isset($alert['error'])) {
    $name = recoverPost('name');
    $email = recoverPost('email');
    $message = revoverPost('message');
}

?>
<link href="<?php echo $this->themePath; ?>/css/form.css" rel="stylesheet">
<div class="container">
    <?php
        if (isset($alert['error'])) {
            echo $alert['error'];
        } elseif (isset($alert['success'])) {
            echo $alert['success'];
        }
    ?>
      <form class="form-signin" role="form" method="post" action="<?php path("contact/send"); ?>">
        <h2 class="form-signin-heading">Contact Us</h2>
        <h4>Questions? Comments? Let us know!</h4>
        <input value='<?php echo $name; ?>' name="name" type="name" class="form-control" placeholder="Name" required autofocus>
        <br/>
        <input value='<?php echo $email; ?>' name="email" type="email" class="form-control" placeholder="Email" required>
        <br/>
        <textarea value='<?php echo $message; ?>' name="message" cols=46 height=10 placeholder="Write your message here..."></textarea>
        <br/>
        <br/>
        <button name="send" class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>

    </div> <!-- /container --> 