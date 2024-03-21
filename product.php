<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop 2</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
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
    <main style="min-height:75vh;">
        <div class="container p-3">
            <div class="row mb-3">
                <h1>List of Products</h1>
                <?php
                include_once __DIR__ . '/db.php';
                foreach ($all_products as $product) : ?>
                    <div class="col">
                        <div class="card mb-3" style="width: 18rem;">
                            <img src="<?php echo $product->image; ?>" class="card-img-top img-fluid" style="height:250px;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product->name; ?></h5>
                                <?php if ($product instanceof FoodDog || $product instanceof FoodCat) : ?>
                                    <p class="card-text">Brand: <?php echo $product->brand; ?></p>
                                    <p class="card-text">Flavor: <?php echo $product->flavor; ?></p>
                                <?php elseif ($product instanceof ToyDog || $product instanceof ToyCat) : ?>
                                    <p class="card-text">Material: <?php echo $product->material; ?></p>
                                    <p class="card-text">Interactive: <?php echo $product->interactive; ?></p>
                                <?php elseif ($product instanceof KennelDog || $product instanceof KennelCat) : ?>
                                    <p class="card-text">Material: <?php echo $product->material; ?></p>
                                    <p class="card-text">Weatherproof: <?php echo $product->weatherproof; ?></p>
                                <?php endif; ?>
                                <p class="card-text">Price: <?php echo $product->price . '$'; ?></p>
                                <p class="card-text">Breed: <?php echo $product->breed; ?></p>
                                <p class="card-text">Size: <?php echo $product->size; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </main>

    <footer class="text-center py-4 bg-light">
        <p>&copy; <?= date('d/m/Y') ?> Pawsome Pet Products</p>
    </footer>



</body>

</html>