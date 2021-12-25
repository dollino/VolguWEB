<?php
require_once 'logic/signin.php';
require "header.php";
?>
<hr>
<main class="main" >
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <div class="h3 mb-4">
                    Авторизация (вход)
                </div>
                <div class="mb-3">
                    <a href="registration.php">
                        У вас еще нет аккаунта?
                    </a>
                </div>
                <form action="login.php" class="text-center" method="post">
                    <div class=" d-flex justify-content-between">
                        <div class="mb-3 pt-2">
                            Логин
                        </div>
                        <input type="text" name="Login" placeholder="Введите логин" class="form-control w-75 mb-3">
                    </div>
                    <?php if($arrayerrors['errlogin']){
                        echo ' <div class = "err mb-2">'.$arrayerrors['errlogin'] . '</div>';}
                    ?>
                    <div class=" d-flex justify-content-between">
                        <div class="mb-3 pt-2">
                            Пароль
                        </div>
                        <input type="password" name="Password" placeholder="Введите пароль" class="form-control w-75 mb-3">
                    </div>
                    <?php if($arrayerrors['errpass']){
                        echo ' <div class = "err mb-2">'.$arrayerrors['errpass'] . '</div>';}
                    ?>

                    <input type="submit" name="login" value="Отправить" class="btn btn-primary">
                </form>
            </div>

        </div>
    </div>
</main>
<hr>
<?php
require "footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
</script>
</body>

</html>