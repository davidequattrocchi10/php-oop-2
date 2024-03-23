<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop 2</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid py-4 ms-5">
                <a class="navbar-brand" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="animals.php">Animals</a>
                        <a class="nav-link active " href="product.php">Products</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-5" style="min-height:75vh;">
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="https://img.freepik.com/free-photo/run-maltipu-little-dog-is-posing_155003-22631.jpg?size=626&ext=jpg" class="img-fluid rounded-start" alt="Happy Pet">
            </div>
            <div class="col-md-6 order-md-1">
                <h1>Welcome to Pawsome Pet Products!</h1>
                <p class="lead">Spoil your furry friend with our wide selection of high-quality pet products!</p>
                <p>We offer everything you need to keep your pet happy and healthy, from food and treats to toys and accessories. Our friendly and knowledgeable staff is always here to help you find the perfect products for your pet.</p>
                <a class="btn btn-primary" href="product.php">Shop Now</a>
            </div>
        </div>

        <?php include_once __DIR__ . '/db.php'; ?>

        <div class="container py-5" style="width: 70%;">
            <div id="carouselExampleIndicators" class="carousel slide">
                <h1>Animals</h1>
                <div class="carousel-indicators">
                    <?php for ($i = 0; $i < count($all_animals); $i++) { ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo ($i === 0) ? 'active' : ''; ?>"></button>
                    <?php } ?>
                </div>
                <div class="carousel-inner">
                    <?php for ($i = 0; $i < count($all_animals); $i++) { ?>
                        <div class="carousel-item <?php echo ($i === 0) ? 'active' : ''; ?>">
                            <img src="<?php echo $all_animals[$i]->getImagePath(); ?>" style="height: 500px; " class="w-100" alt="...">
                        </div>
                    <?php } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>

    <footer class="text-center py-4 bg-light">
        <p>&copy; <?= date('d/m/Y') ?> Pawsome Pet Products</p>
    </footer>

</body>

</html>