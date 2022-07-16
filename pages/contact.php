<?php include_once 'header.php';?>
<?php include '../includes/config.php'; ?>

<?php 
    /*$email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }*/





?>





<div class="row">
    <div class="col-md-3 col-xs-2"></div>
    <div class="col-md-6 col-xs-8">
        <br>
        <h4 class="text-center">Contact Me!</h4><hr>
        <form action="" method="post" class="">
            Email:
            <input name="email" type="email" placeholder="Type your email" class="form-control">
            Name: 
            <input name="name" type="name" placeholder="Type your name" class="form-control">
            Your Text:
            <textarea name="text" id="textarea" cols="15" rows="5" class="form-control" placeholder="Type your text"></textarea><br>
            <div class="text-right">
                <input name="mail_submit" type="submit" class="btn btn-outline-success" value="mail now">
            &nbsp;
                <input type="reset" class="btn btn-outline-info">
            </div>
        </form>
        <br>
    </div>
    <div class="col-md-3 col-xs-2"></div>
</div>

<?php include_once 'footer.php';?>