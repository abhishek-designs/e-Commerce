<?php
    if(!isset($_SESSION))
    {
        echo '';
    }
    else
    {
        session_start();
    }
?>
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
            <div class="cart-update-msg">
                <div class="msg-content">
                    <p class="head-3">Your cart updated</p>
                </div>
            </div>
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
                <div class="wishlist">
                    <a href="#" class="btn btn-unique wish-btn">
                        <i class="fa fa-heart"></i>
                        <p class="lead-3">Add to wishlist</p>
                    </a>
                </div>
                <!-- <div class="product-desc">
                    <p class="lead-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore velit, odit aperiam repellendus voluptatibus enim necessitatibus? Ea quo labore numquam ipsa soluta unde, ratione voluptatum reprehenderit veniam saepe recusandae, sint corrupti quaerat quod culpa. Autem, sapiente eum. Iure tempora consequuntur excepturi eum facilis labore error porro ullam sit impedit mollitia, minus repellat beatae sunt amet dicta veritatis laudantium suscipit pariatur modi nihil ab quas exercitationem ea? Porro, perspiciatis deleniti. Labore omnis deserunt maiores. Vitae animi officia facilis unde, dolorum iusto ducimus accusamus, omnis officiis nulla illo hic voluptates doloremque quo sapiente. Quam molestias impedit consectetur quisquam? Quam quidem a voluptatibus molestiae illum consectetur culpa tempora, ea necessitatibus expedita reiciendis quae, quaerat quasi ipsam architecto nobis dicta nihil! Dolores quia architecto numquam debitis ipsam nulla, reiciendis eum sequi ducimus esse ad iusto expedita provident quas voluptas sit consectetur earum illo tempore quo unde vero asperiores a rem! Non a repellendus similique nesciunt laborum neque dicta laudantium! Illum quisquam quibusdam quo distinctio voluptatibus, officiis cum quos consequuntur debitis hic a? Necessitatibus possimus officiis eveniet et quo. Culpa sunt magni est magnam explicabo maxime rem reiciendis voluptatibus libero facilis dicta nihil dolores placeat consectetur beatae odit sit quas vel enim, accusamus et praesentium. Alias aperiam necessitatibus, repellat, adipisci ipsa error quas ab possimus debitis sed ea quisquam doloribus. Error, eaque. Dolorem ipsa assumenda rerum iure libero qui dolor est veritatis eveniet nobis aut, minima facere amet a autem fugit facilis quam reprehenderit nulla non suscipit veniam, corrupti sit alias! Obcaecati accusantium perspiciatis, commodi libero fugiat explicabo suscipit modi, repudiandae corporis iure repellat vitae? Assumenda quasi voluptates distinctio! Facere aspernatur repellat ea atque aliquid velit corporis at explicabo, placeat vel iste dolorum quos veniam voluptatum adipisci deleniti doloremque? Molestias, architecto? Eius, explicabo. Maxime molestiae incidunt, illum eveniet odio quae suscipit labore pariatur iure architecto porro minus quis repudiandae velit veritatis nemo laboriosam deserunt in consectetur quo. Voluptates numquam debitis aut ipsa, accusantium accusamus quos a sapiente, quo quaerat amet consectetur, dolores impedit. Explicabo consectetur a fugit excepturi, fuga quibusdam suscipit nulla! Tenetur, ullam alias? Obcaecati iste ipsum amet cum asperiores, tempora molestiae blanditiis dolores sunt expedita doloribus inventore ad aut consequatur eveniet debitis impedit beatae minima illum soluta. Asperiores nisi architecto quae quasi numquam odio eos sed, rem voluptates minus nam deserunt in provident facere id! Neque eos, eveniet minima deleniti quidem officia consequatur laudantium. Accusamus corporis delectus quae amet fuga, perferendis rerum voluptatibus iure odit, dolor id molestiae ipsum dolore vel. Laudantium sapiente maiores fugiat odit iure omnis, harum expedita ad quo ipsa exercitationem adipisci, aspernatur iste, non rerum ea nam optio! Officiis culpa aliquam velit quasi perferendis voluptatum saepe nostrum? Provident enim nostrum doloremque voluptas quod quis similique doloribus possimus. Consectetur porro praesentium natus sequi quam suscipit dolorem ipsam quaerat minus dignissimos saepe, qui modi ducimus maiores aperiam exercitationem neque ipsum numquam temporibus quo dolores corporis? Dolore accusantium praesentium ea similique perferendis ex beatae deleniti dolor quibusdam odit eius nulla repellendus nobis quos earum rerum eveniet excepturi, sint nihil quo. Corrupti, delectus.</p>
                </div> -->
                
            </div>
        </div>
    </section>

    <!-- Product description section -->
    <section id="product-desc" class="py-2">
        <div class="container">
            <h2 class="head-2">Product Description</h2>
            <p class="lead-3"><?php echo $productDesc; ?></p>
        </div>
    </section>

    <!-- Question Section facitlity for the user to ask a question about a product -->
    <section id="ques-pane" class="py-2">
        <div class="container">
            <?php
                if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
                {
                    echo '<h2 class="head-2">You are not logged in</h2>';
                }
                else
                {
                    if(!isset($_SESSION['userid']))
                    {
                        echo 'no user found';
                    }
                    else
                    {
                        echo '<h2 class="head-2">Have a question?</h2>
                            <p class="lead-3">Clear your query regarding this product</p>
                            <div class="ques-form">
                                <form action="partials/_askQuestion.php" method="POST">
                                    <input type="text" name="user_id" class="userId" value="'.$_SESSION['userid'].'" hidden>
                                    <input type="text" name="product_id" class="productId" value="'.$productId.'" hidden>
                                    <input type="text" name="ques" id="ques" class="ques-field" placeholder="Ask your question :)" onkeyup="getRes(this.value)" autocomplete="off">
                                    <button class="btn btn-unique post-btn" type="submit">post</button>
                                </form>
                                <div class="ques-res">

                                </div>
                            </div>';

                    }

                    
                }
                
            ?>
        </div>
        <?php 

            $ques_recieved = false;
            if(!isset($_GET['ques_registered']) || $_GET['ques_registered']!=true)
            {
                echo '';
            }
            else
            {
               $ques_recieved = true; 
            }

            if($ques_recieved == true)
            {
                echo '<div class="cart-update-msg">
                        <div class="msg-content">
                            <p class="head-3">Your question registered</p>
                        </div>
                    </div>';
            }
            else
            {
                echo '<div class="cart-update-msg">
                        <div class="msg-content">
                            <p class="head-3">Question registration failed</p>
                        </div>
                    </div>';
            }
        ?>
    </section>

    <!-- Users ques and ans section -->
    <section id="qna-pane" class="py-2">
        <div class="container">
            <h2 class="head-2">Question & answers</h2>
            <p class="lead-3">Get all your doubt cleared about this product in this section</p>

            <div class="qna-tab">
                <?php
                    // Query to fetch all the question and answers
                    $qnaQuery = 'SELECT * FROM `users_ques` WHERE `product_id`='.$productId;
                    $quesRes = mysqli_query($con,$qnaQuery);
                    $num = mysqli_num_rows($quesRes);
                    // echo $num;
                    if($num > 0)
                    {
                        while($row = mysqli_fetch_assoc($quesRes))
                        {
                            $quesId = $row['ques_id'];
                            $questions = $row['ques_desc'];

                            // Query to fetch one answer according to the question asked
                            $ansQuery = 'SELECT * FROM `users_ans` WHERE `ques_id`='.$quesId.' LIMIT 1';
                            $ansRes = mysqli_query($con,$ansQuery);
                            $num = mysqli_num_rows($ansRes);

    
                            echo '<div class="qna-stack">
                                    <div class="ques-tab">
                                        <h3 class="head-3">Question:</h3>
                                        <a href="productQna.php?product_id='.$productId.'&question_id='.$quesId.'" class="ques-link head-3 main">'.$questions.'</a>
                                    </div>
                                    <div class="ans-tab">
                                        <h3 class="head-3">Answer:</h3>';
                                        if($num == 1)
                                        {
                                            // Comment found
                                            while($row = mysqli_fetch_assoc($ansRes))
                                            {
                                                $answer = $row['ans_desc'];
                                                echo '<p class="ans-link head-3">'.$answer.'</p>';
                                            }
                                        }
                                        else
                                        {
                                            // No comment found
                                            $answer = 'No answer given';
                                            echo '<p class="ans-link med head-3">'.$answer.'</p>';
                                        }
                                        
                                        
                                    echo '</div>
                                </div>';
    
                        }

                    }
                    else
                    {
                        echo 'no question and answers found';
                    }
                ?>

            </div>

        </div>
    </section>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>
</html>

<!-- Embeded Scripts -->
<script src="scripts/search.js"></script>
<script type='text/javascript'>

    // Fetching the user id through client
    var userId = <?php echo $_SESSION['userid']; ?>;
    

    // Accessing the cart quantity showing component
    const nav = document.querySelector('.navbar');
    const cartNum = nav.querySelector('.cart-indicate');

    // Accessing the parent element of the btn first
    const parent = document.querySelector('.product-img');
    const cartBtn = parent.querySelector('.cart-btn');

    // Accessing the cart notification tab
    const cartMsg = document.querySelector('.cart-update-msg');

        
    // Making the btn functional
    cartBtn.addEventListener('click',updateCart);


    function updateCart(event)
    {
        // Fetching product id through client side
        // var productBox = this.parentElement;
        // var productIdContain = productBox.querySelector('.product-id');
        var productId = <?php echo $productId; ?>;
        // console.log('user id '+userId+' selected the product '+productId);


        var xhr = new XMLHttpRequest();
        xhr.open("GET","partials/_updateCart.php?product_id="+productId+"&user_id="+userId,true);
        xhr.send();

        xhr.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                cartMsg.style.animationName = 'pop-in';
        
                setTimeout(function(){
                    cartMsg.style.animationName = 'pop-out';
                },3000)
            }
        }

        var xhr2 = new XMLHttpRequest();
        xhr2.open("GET","partials/_cartItemNo.php",true);
        xhr2.send();
        
        xhr2.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                cartNum.innerText = this.responseText;
            }
        }

    }

    // Get search results 
    function getRes(value)
    {
        // Accessing the container in which we can show the search results
        var resContain = document.querySelector('.ques-res');

        // Pulling the question to be searched for
        var ques = value;

        emptyField(value);

        // Now requesting to the server to get the search result
        var xhr = new XMLHttpRequest();
        xhr.open('GET','partials/_getQuesSearch.php?ques='+ques,'true');
        xhr.send();

        xhr.onload = function(event)
        {
            if(this.status === 200)
            {
                // Connection established
                resContain.innerHTML = '<ul>'+this.responseText+'</ul>';

            }
            else
            {
                // Connection failed
            }
        }

    }

    function emptyField(value)
    {
        var resContain = document.querySelector('.ques-res');
        resContain.style.display = 'none';
        
        if(value === '' || value === 'No question found')
        {
            resContain.style.display = 'none';
        }
        else
        {
            resContain.style.display = 'block';
        }
    }

    // Post button will be enabled/disabled according to the question field
    const quesField = document.querySelector('.ques-field');
    const postBtn = document.querySelector('.post-btn');

    quesField.addEventListener('keyup',onEmpty);

    // // button is disabled
    postBtn.disabled = true;
    postBtn.classList.remove('btn-unique');
    postBtn.classList.add('btn-disabled');

    function onEmpty(event)
    {
        
        checkField();
        
    }

    function checkField()
    {
        var ques = quesField.value;

        // If the there is no value in the field
        if(ques== '' || ques== null)
        {
            // button is enabled
            postBtn.disabled = true;
            postBtn.classList.remove('btn-unique');
            postBtn.classList.add('btn-disabled');

        }
        else
        {
            postBtn.disabled = false;
            postBtn.classList.remove('btn-disabled');
            postBtn.classList.add('btn-unique');
        }
    }

    // postBtn.classList.remove('btn-unique');
    // postBtn.classList.add('btn-disabled');


</script>