<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
            <h3>ADD NEW ARTICLE</h3>
                <form action="<?php echo site_url('blog/publish');?>" method="post">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <textarea name="content" id="ckeditor" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">PUBLISH</button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/jquery/jquery-3.3.1.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/bootstrap.bundle.js');?>"></script>
    <script src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>
    <script type="text/javascript">
        $(function () {
                CKEDITOR.replace('ckeditor',{
                    filebrowserImageBrowseUrl : '<?php echo base_url('assets/kcfinder/browse.php');?>',
                    height: '400px'             
                });
            });
    </script>
</body>
</html>