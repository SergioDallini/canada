<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <title>Контактная форма</title>
</head>
<body>
<?php require_once("blocks/header.php")?>


<div class="container mt-3">
    <h3 class="mb-5">Контактная форма</h3>
    <form action="check.php" method="post">
        <input type="email" name="email" placeholder="Введите ваш E-Mail" class="form-control mb-4">
        <textarea name="message" class="form-control mb-4" placeholder="Введите ваше сообщение"></textarea>
        <button type="submit" name="send" class="btn btn-success">Отправить</button>
    </form>
</div>


<?php require_once("blocks/footer.php")?>
</body>
</html>
