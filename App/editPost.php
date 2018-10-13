<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Create post</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 ofset-md-2">
            <form action="storeEdit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $post->id; ?>">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $post->title; ?>">
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <input type="text" name="content" class="form-control" value="<?php echo $post->content; ?>>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Edit Post</button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>
