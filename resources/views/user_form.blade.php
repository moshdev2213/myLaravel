<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?=session('message')?>

    <h1><?=$tile?></h1>
    <form method="POST" action="<?=url('get_userData')?>">
        <label for="">Name <input type="text" name="name"></label>
        <input type="hidden" name="_token" value="<?=csrf_token() ?>">
    </form>
</body>
</html>
