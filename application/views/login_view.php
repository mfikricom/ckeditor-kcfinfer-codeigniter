<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <form action="<?php echo site_url('login/auth');?>" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Login</button>
                    <strong>Username = admin<br>password = admin</strong>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/jquery/jquery-3.3.1.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/bootstrap.bundle.js');?>"></script>
</body>
</html>