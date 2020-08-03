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
    <link rel="stylesheet" href="css/productQna.css">
    <title>Question and Answers</title>
</head>
<body>
    <!-- Navigation Bar -->
    <?php require 'partials/_navbar.php'; ?>

    <!-- Database Connection -->
    <?php require 'partials/_mySQLConnect.php'; ?>

    <!-- Fetching user id by session tracking -->
    <?php
        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
        {
            echo '';
        }
        else
        {
            if(!isset($_SESSION['userid']))
            {
                echo '';
            }
            else
            {
                $userID = $_SESSION['userid'];
            }

        }
    ?>

    <!-- Fetching all the required data from the URL -->
    <?php
        $productId = $_GET['product_id'];
        $quesId = $_GET['question_id'];
    ?>

    <!-- Query to first get the product details -->
    <?php
        $productQuery = 'SELECT * FROM `products` WHERE `product_id`='.$productId;
        $productRes = mysqli_query($con,$productQuery);

        while($row = mysqli_fetch_assoc($productRes))
        {
            $subSubCatId = $row['sub_sub_cat_id'];
            $productBrand = $row['product_brand'];
            $productName = $row['product_name'];
            $productDesc = $row['product_desc'];
        }
    ?>

    <!-- Product showcase pane to identify on which product question is asked -->
    <section id="product-showcase" class="py-1">
        <div class="container">
            <div class="product-pane">
                <div class="img-tab">
                    <img src="img/Products/<?php echo $productId.$subSubCatId; ?>.png" alt="">
                </div>
                <div class="content-tab">
                    <h2 class="head-4 main"><?php echo $productBrand; ?></h2>
                    <h2 class="head-3"><?php echo $productName; ?></h2>
                    <p class="lead-3"><?php echo $productDesc; ?></p>
                </div>
            </div>

            <!-- Comment tab to allow users to give answers to someone's question -->
            <div class="comment-pane">
                <h2 class="head-4">Leave a comment on this question.</h2>
                <div class="form-grp">
                    <form action="partials/_giveAnswers.php" method="post">
                        <input type="text" name="product_id" id="product-id" class="product-id" value=<?php echo $productId; ?> hidden>
                        <input type="text" name="ques_id" id="ques-id" class="ques-id" value=<?php echo $quesId; ?> hidden>
                        <input type="text" name="user_id" id="user-id" class="user-id" value=<?php echo $userID; ?> hidden>
                        <input type="text" name="ans" id="ans" class="ans">
                        <button type="submit" class="btn btn-unique ans-btn">Post</button>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Fetching the question according to the question id -->
    <?php
        $quesQuery = 'SELECT * FROM `users_ques` WHERE `ques_id`='.$quesId;
        $quesRes = mysqli_query($con,$quesQuery);

        while($row = mysqli_fetch_assoc($quesRes))
        {
            $question = $row['ques_desc'];
            $quesTime = $row['ques_asked_on'];
            $userId = $row['user_id'];
        }

        $quesAskedOn = date('jS F Y',strtotime($quesTime));
    ?>

    <!-- Fetching user name -->
    <?php 
        $nameQuery = 'SELECT `Cust_Name` FROM `t2` WHERE `Cust_Id`='.$userId;
        $nameRes = mysqli_query($con,$nameQuery);

        while($row = mysqli_fetch_assoc($nameRes))
        {
            $userName = $row['Cust_Name'];
        }
    ?>

    <!-- Question tab to show the question -->
    <section id="question-pane" class="py-2">
        <div class="container">
            <div class="ques-contain">
                <!-- This tab shows the question -->
                <div class="ques-tab">
                    <h3 class="head-1"><?php echo 'Q. '.$question; ?></h3>
                </div>
    
                <!-- this tab shows the information of the question -->
                <div class="ques-info-tab">
                    <div class="asked-by">
                        <div class="ico-tab">
                            <i class="fa fa-user"></i>
                        </div>
                        <p class="lead-3 main"><?php echo $userName; ?></p>
                    </div>
                     <div class="asked-on">
                         <p class="lead-3 main asked">Asked on:</p>
                        <p class="lead-3 main"><?php echo $quesAskedOn; ?></p>
                     </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Answers tab to show all the answers -->
    <section id="answers-pane" class="py-1">
        <div class="container">
            <!-- Query to print all the answers given by the users -->
            <?php
                $ansQuery = 'SELECT * FROM `users_ans` WHERE `ques_id`='.$quesId;
                $ansRes = mysqli_query($con,$ansQuery);
                $ansNum = mysqli_num_rows($ansRes);

                if($ansNum > 0)
                {
                    // Answers are there
                    while($row = mysqli_fetch_assoc($ansRes))
                    {
                        $answer = $row['ans_desc'];
                        $ansTime = $row['ans_posted_on'];

                        $ansPostedOn = date('jS F Y',strtotime($ansTime));

                        echo '<div class="ans-stack">
                            <div class="content-tab">
                                <div class="ico-tab">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="content">
                                    <p class="lead-4 username">Ramesh</p>
                                    <p class="lead-2 main">'.$answer.'</p>
            
                                </div>
                            </div>
                            <div class="timeline-tab">
                                <p class="lead-3"><span class="posted">Posted on:</span> '.$ansPostedOn.'</p>
                            </div>
                        </div>';

                    }
                    
                }
                else
                {
                    // No answers are there
                }
            ?>

        </div>
    </section>

    <!-- Footer -->
    <?php require 'partials/_footer.php'; ?>
</body>
</html>

<script type="text/javascript">
    // Accesing the comment field
    const ansField = document.querySelector('.ans');

    // Accessing the post btn
    const postBtn = document.querySelector('.ans-btn');

    // Adding functionality to ans field
    ansField.addEventListener('keyup',onEmpty);

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
        var ans = ansField.value;

        // If the there is no value in the field
        if(ans== '' || ans== null)
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