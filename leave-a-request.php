<?php
    $title = 'Оставить заявку';
    require 'blocks/header.php';
?>
<div class="container mt-5">
    <h1>Отправьте нам свою заявку:<br></h1>

    <form action="check_contact.php" method="post">
        <label>
            <input type="text" name="username" value="<?=$_SESSION['username']?>" placeholder="Введите своё имя" class="form-control"><br>
            <input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="Введите свою почту" class="form-control"><br>
            <input type="password" name="password" value="<?=$_SESSION['password']?>" placeholder="Придумайте пароль" class="form-control"><br>
            <input type="password" name="check_password" value="<?=$_SESSION['password']?>" placeholder="Подтвердите пароль" class="form-control"><br>
            <input type="number" name="age" value="<?=$_SESSION['number']?>" placeholder="Введите свой возраст" class="form-control"><br>
            <textarea name="message" placeholder="Ваше сообщение" class="form-control"></textarea><br>
        </label><br>
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>
</div>
<?php
    require  'blocks/footer.php';
?>