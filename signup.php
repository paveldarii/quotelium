
<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/inc/head-scripts.php');?>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/nav.php');?>
<main class="page-background">
    <div class="container">
        <div clas="col-sm-3">
        <form id="create-user" class="mt-5" method="post" >
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control"  name="password" placeholder="Password" >
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Repeat Password" >
            </div>
            <button id="submit-create-user" name="submit" type="submit" value="Submit" class="btn btn-primary">Sign up</button>
        </form>
        </div>
    </div>
</main>
<?php include ($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/bottom_scripts.php');?>
</body>
</html>