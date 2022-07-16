<?php include_once 'header.php'; ?>
<?php
    include '../includes/config.php';
    $sql = "SELECT * FROM portfolio WHERE ('id', 'title', 'description', 'image'); ";

?>



<div class="jumbotron">
    <h1 class="text-center">Portfolio</h1>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div>
                <img src="../img/birthday.jpg" alt="" height="100px" width="150px">
                <h2>Title</h2>
                <h6>Description</h6>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php include_once 'footer.php'; ?>