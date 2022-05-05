<?php
    $currentPage = $pageInfo->getCode();
    $userRole = 'guest';
    $path = '/';
    $pageRole = $pageInfo->getRole();
?>
<!doctype html>
<html lang="en" class="d-flex flex-column h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Подключаем стили -->
    <link rel="stylesheet" href="/app/views/css/bootstrap.min.css">
    <link rel="stylesheet" href="/app/views/css/style.css">
    <!-- Подключаем скрипты -->
    <script src="/app/views/js/bootstrap.min.js"></script>
    <script src="/app/views/js/script.js"></script>
    <title><? echo $pageInfo->getTitle();?></title>
</head>
<body class="d-flex flex-column h-100">
<header>
    <nav class="navbar navbar-expand-md navbar-dark dropdown-menu-dark">
        <div class="container">
            <a href="#" class="navbar-brand col-4" style="font-size: 14pt;">
                <span class="d-none d-xxl-block">Гостевой дом "Александрия"</span><span class="d-inline d-xxl-none"><?echo $pageInfo->getText(); ?></span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col-8" id="navbarCollapse">
                <ul class="navbar-nav">
                <?php
                foreach ($activePages as $key => $activePage) {
                    $activeClass = ($key == $currentPage) ? ' active' : '';
                    if ($userRole === $rolePages[$key]) {
                        ?>
                <li class="nav-item">
                    <a class="nav-link<?echo $activeClass?>" href="<?echo $path.$key.'/';?>"><?php echo $activePage;?></a>
                </li>
                <?php }} ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Войти</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container work-area h-100">
<?php
    $code = $pageInfo->getCode();
    require_once('app/views/'.$code.'View.php');
?>
</div>

<footer class="footer mt-auto py-3 bg-dark">
    <div class="container text-center">
        <span class="text-muted"> Александрия @ <?echo date('Y')?> </span>
    </div>
</footer>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>