<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Статья № <?php echo $post->id; ?></title>
</head>
<body>
<div class="card">
    <div class="card-header">
       <h2> <?php
        echo $post->title;
           ?></h2>
    </div>
    <div class="card-body">
        <?php
        echo $post->content;
        ?>
    </div>
</div>
<a href="../index.php">На главную</a>
</body>
</html>

