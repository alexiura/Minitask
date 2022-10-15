<!DOCTYPE html>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->renderSection("title") ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<header>
    <?php if (session()->has('user_id')): ?>
        
        <nav class="navbar navbar-expand-lg bg-dark">
            <a class="navbar-brand text-white" href="#">CodeIgniter</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="<?= site_url("/logout") ?>">Log Out </a>
                        </li>
                    </ul>
            </div>
        </nav>

        <p>User is logged in</p>
        
        <p>Hello <?= esc(current_user()->name) ?></p>
        
    <?php else: ?>
        
        <nav class="navbar navbar-expand-lg bg-dark">
            <a class="navbar-brand text-white" href="">CodeIgniter</a>
        </nav>

    <?php endif; ?>
</header>

<body>

    <?php if (session()->has('warning')): ?>
        <div class="warning">
            <?= session('warning') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('info')): ?>
        <div class="info">
            <?= session('info') ?>
        </div>
    <?php endif; ?>

    <?= $this->renderSection("content") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
</body>
</html>