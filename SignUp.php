<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/signLook.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
        <form action="" method="post" enctype="multipart/form-data" id="uploadImage">
            <div class="form-login">
            <h4>Sign Up</h4>
            <input type="text" id="username" class="form-control input-sm chat-input" placeholder="username" />
            </br>
            <input type="password" id="password" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <a href="index.php" class="btn btn-primary btn-md" type="submit">Create <i class="fa fa-sign-in"></i></a>
            </span>
            </div>
            </div>
        </form>
        </div>
    </div>
</div>
<?php require './includes/footer.php'; ?>