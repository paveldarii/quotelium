
<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/inc/head-scripts.php');?>
</head>
    <body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/inc/nav.php');?>
        <form id="create-user" method="post" class="m-5" >
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="password" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="address" >
            </div>

            <button id="submit-create-user" name="submit" type="submit" value="Submit" class="btn btn-primary">Sign up</button>
        </form>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Your Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Name: <?php echo $_POST["email"]?></p>
                        <p>Password: <?php echo $_POST["password"]?></p>
                        <p>Address: <?php echo $_POST["address"]?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
