<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5514dc631b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/product_info.css">
    <title>Productinfo</title>
</head>
<body>
    <!-- Navigation Bar -->
    <?php require 'partials/_navbar.php'; ?>

    <!-- Product Info Section -->
    <section id="product-info" class="product-info py-2">
        <!-- Product Different showcase -->
        <div class="product-info-showcase">
            <div class="showcase-contain">
                <div class="showcase">
                    <img src="img/Products/401301.png" alt="showcase">
                </div>
                <div class="showcase">
                    <img src="img/Products/402301.png" alt="showcase">
                </div>
                <div class="showcase">
                    <img src="img/Products/403301.png" alt="showcase">
                </div>
                <div class="showcase">
                    <img src="img/Products/404302.png" alt="showcase">
                </div>

            </div>
        </div>

        <!-- Product Image -->
        <div class="product-info-img">
            <div class="product-img">
                <img src="img/Products/401301.png" alt="main-img">
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-info-content">
            <div class="product-content">
                <div class="product-title">
                    <h2 class="head-2">Men Checked Shirt</h2>
                </div>
                <div class="product-rating">
                    <i class="fa fa-star main"></i>
                    <i class="fa fa-star main"></i>
                    <i class="fa fa-star main"></i>
                    <i class="far fa-star main"></i>
                    <i class="far fa-star main"></i>
                </div>
                <div class="product-pricing">
                    <h2 class="head-3 lead-cutoff med">₹999</h2>
                    <h2 class="head-2">₹599</h2>
                </div>
                <div class="product-desc">
                    <p class="lead-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut maiores quasi ea delectus aliquam voluptas molestiae dolor accusamus nulla voluptatum harum vero iste esse quibusdam ad ducimus tempora, impedit recusandae cum beatae eaque. Ipsam illo recusandae laboriosam tempore dolorem magnam ullam odio sit perferendis? Est tempore quis nulla excepturi? Ab.</p>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>
</html>