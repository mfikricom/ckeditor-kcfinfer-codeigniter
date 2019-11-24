<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <h2><?php echo $title;?></h2>
                <article><?php echo $content;?></article>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/jquery/jquery-3.3.1.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/bootstrap.bundle.js');?>"></script>
</body>
</html>