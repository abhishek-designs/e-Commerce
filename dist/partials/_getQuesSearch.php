<?php
    // Getting the question from the URL to be searched for
    $question = $_GET['ques'];
    if(!isset($question))
    {
        echo '';
    }
    else
    {
        $ques = strtolower($question);
        $quesLen = strlen($question);
    
        // This variable will fetch the suggestions according to the question
        $suggestion = '';
    
        // Database Connection
        require '_mySQLConnect.php';
    
        // Query to fetch all the previous questions
        $quesQuery = 'SELECT * FROM `users_ques`';
        $quesRes = mysqli_query($con,$quesQuery);
        $num = mysqli_num_rows($quesRes);
    
        if($ques !== '')
        {
            while($row = mysqli_fetch_assoc($quesRes))
            {
                $quesId = $row['ques_id'];
                $prevQues = $row['ques_desc'];
                $productId = $row['product_id'];
                
                if(stristr($ques,substr($prevQues,0,$quesLen)))
                {
                    if($suggestion === '')
                    {
                        $suggestion = '<li class="srch-res"><a href="partials/_insertSearch.php?product_id='.$productId.'&question_id='.$quesId.'"><p class="lead-3">'.$prevQues.'</p></a></li>';
    
                    }
                    else
                    {
                        $suggestion.= '<li class="srch-res"><a href="productQna.php?product_id='.$productId.'&question_id='.$quesId.'"><p class="lead-3">'.$prevQues.'</p></a></li>';
                    }
                    
                }
    
            }
            
            
        }
        
        if($suggestion!=null || $suggestion!='')
        {
            echo $suggestion;
        }
        else
        {
            echo '<li><p class="lead-3">No question found</p></li>';
        }

    }

?>