<div class="d-flex flex-column flex-md-row align-items-center pb-3 mt-3 mb-4 border-bottom">
    <h5 class="my-0 mr-md-auto font-weight-normal">Shossser.com</h5>
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="index.php">Главная</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="about.php">Контакты</a>
    </nav>
    <?php if($_COOKIE['user'] == 'Yes'):?>
    <a class="btn btn-outline-primary" href="auth.php">Личный кабинет</a>
    <?php else:?>
    <a class="btn btn-outline-primary" href="auth.php">Войти</a>
    <?php endif;?>
</div>