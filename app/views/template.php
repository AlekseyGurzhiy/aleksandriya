<?php
    $currentPage = $pageInfo->getCode();
    $userRole = 'guest';
    $path = '/';
    $pageRole = $pageInfo->getRole();
?>
<!doctype html>
<html lang="en">
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
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark dropdown-menu-dark">
        <div class="container">
            <a href="/" class="navbar-brand col-4" style="font-size: 14pt;">Гостевой дом "Александрия"</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-4 collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto mb-2 mb-md-0">
                <?php
                foreach ($activePages as $key => $activePage) {
                    $activeClass = ($key == $currentPage) ? ' active' : '';
                    if ($userRole === $rolePages[$key]) {
                        ?>
                <li class="nav-item">
                    <a class="nav-link<?echo $activeClass?>" href="<?echo $path.$key.'/';?>"><?php echo $activePage;?></a>
                </li>
                <?php }} ?>
                </ul>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="btn-sm btn-outline-secondary float-end" href="/auth/">Войти</a>
            </div>
        </div>
    </nav>
</header>

<div class="container work-area">
<?php
    $code = $pageInfo->getCode();
    require_once('app/views/'.$code.'View.php');
?>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>