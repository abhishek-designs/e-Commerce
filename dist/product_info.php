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

    <!-- Fetching the product id and sub category id from the URL -->
    <?php 
        $productId = $_GET['product_id'];
        $subSubCatId = $_GET['sub_sub_cat_id'];
    ?>

    <!-- Connecting to Database -->
    <?php require 'partials/_mySQLConnect.php'; ?>

    <!-- Executing query to fetch the product details -->
    <?php
        $query = 'SELECT * FROM products WHERE product_id='.$productId;
        $res = mysqli_query($con,$query);
        $num = mysqli_num_rows($res);

        if($num == 1)
        {
            $row = mysqli_fetch_assoc($res);

            // Fetching each data of the product
            $productBrand = $row['product_brand'];
            $productName = $row['product_name'];
            $productDesc = $row['product_desc'];
            $productMrpPrice = $row['product_price_mrp'];
            $productPrice = $row['product_price'];

        }
    ?>

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
                <?php
                    echo '<img src="./img/Products/'.$productId.$subSubCatId.'.png" alt="main-img">'
                ?>
                <div class="btn-tab">
                    <a href="#" class="btn btn-unique cart-btn">
                        <i class="fa fa-shopping-cart light"></i>
                        <p class="lead-2">Add to Cart</p>
                    </a>
                    <a href="#" class="btn btn-unique buy-btn">
                        <i class="fa fa-money light"></i>
                        <p class="lead-2">Buy Now</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-info-content">
            <div class="product-content">
                <div class="product-title">
                    <h2 class="head-3 main"><?php echo $productBrand; ?></h2>
                    <h2 class="head-2"><?php echo $productName; ?></h2>
                </div>
                <div class="product-rating">
                    <i class="fa fa-star main"></i>
                    <i class="fa fa-star main"></i>
                    <i class="fa fa-star main"></i>
                    <i class="far fa-star main"></i>
                    <i class="far fa-star main"></i>
                </div>
                <div class="product-pricing">
                    <h2 class="head-2"><?php echo '₹'.$productPrice; ?></h2>
                    <h2 class="head-3 lead-cutoff med"><?php echo '₹'.$productMrpPrice; ?></h2>
                </div>
                <div class="product-desc">
                    <p class="lead-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore velit, odit aperiam repellendus voluptatibus enim necessitatibus? Ea quo labore numquam ipsa soluta unde, ratione voluptatum reprehenderit veniam saepe recusandae, sint corrupti quaerat quod culpa. Autem, sapiente eum. Iure tempora consequuntur excepturi eum facilis labore error porro ullam sit impedit mollitia, minus repellat beatae sunt amet dicta veritatis laudantium suscipit pariatur modi nihil ab quas exercitationem ea? Porro, perspiciatis deleniti. Labore omnis deserunt maiores. Vitae animi officia facilis unde, dolorum iusto ducimus accusamus, omnis officiis nulla illo hic voluptates doloremque quo sapiente. Quam molestias impedit consectetur quisquam? Quam quidem a voluptatibus molestiae illum consectetur culpa tempora, ea necessitatibus expedita reiciendis quae, quaerat quasi ipsam architecto nobis dicta nihil! Dolores quia architecto numquam debitis ipsam nulla, reiciendis eum sequi ducimus esse ad iusto expedita provident quas voluptas sit consectetur earum illo tempore quo unde vero asperiores a rem! Non a repellendus similique nesciunt laborum neque dicta laudantium! Illum quisquam quibusdam quo distinctio voluptatibus, officiis cum quos consequuntur debitis hic a? Necessitatibus possimus officiis eveniet et quo. Culpa sunt magni est magnam explicabo maxime rem reiciendis voluptatibus libero facilis dicta nihil dolores placeat consectetur beatae odit sit quas vel enim, accusamus et praesentium. Alias aperiam necessitatibus, repellat, adipisci ipsa error quas ab possimus debitis sed ea quisquam doloribus. Error, eaque. Dolorem ipsa assumenda rerum iure libero qui dolor est veritatis eveniet nobis aut, minima facere amet a autem fugit facilis quam reprehenderit nulla non suscipit veniam, corrupti sit alias! Obcaecati accusantium perspiciatis, commodi libero fugiat explicabo suscipit modi, repudiandae corporis iure repellat vitae? Assumenda quasi voluptates distinctio! Facere aspernatur repellat ea atque aliquid velit corporis at explicabo, placeat vel iste dolorum quos veniam voluptatum adipisci deleniti doloremque? Molestias, architecto? Eius, explicabo. Maxime molestiae incidunt, illum eveniet odio quae suscipit labore pariatur iure architecto porro minus quis repudiandae velit veritatis nemo laboriosam deserunt in consectetur quo. Voluptates numquam debitis aut ipsa, accusantium accusamus quos a sapiente, quo quaerat amet consectetur, dolores impedit. Explicabo consectetur a fugit excepturi, fuga quibusdam suscipit nulla! Tenetur, ullam alias? Obcaecati iste ipsum amet cum asperiores, tempora molestiae blanditiis dolores sunt expedita doloribus inventore ad aut consequatur eveniet debitis impedit beatae minima illum soluta. Asperiores nisi architecto quae quasi numquam odio eos sed, rem voluptates minus nam deserunt in provident facere id! Neque eos, eveniet minima deleniti quidem officia consequatur laudantium. Accusamus corporis delectus quae amet fuga, perferendis rerum voluptatibus iure odit, dolor id molestiae ipsum dolore vel. Laudantium sapiente maiores fugiat odit iure omnis, harum expedita ad quo ipsa exercitationem adipisci, aspernatur iste, non rerum ea nam optio! Officiis culpa aliquam velit quasi perferendis voluptatum saepe nostrum? Provident enim nostrum doloremque voluptas quod quis similique doloribus possimus. Consectetur porro praesentium natus sequi quam suscipit dolorem ipsam quaerat minus dignissimos saepe, qui modi ducimus maiores aperiam exercitationem neque ipsum numquam temporibus quo dolores corporis? Dolore accusantium praesentium ea similique perferendis ex beatae deleniti dolor quibusdam odit eius nulla repellendus nobis quos earum rerum eveniet excepturi, sint nihil quo. Corrupti, delectus.</p>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>
</html>