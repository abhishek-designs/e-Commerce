<?php
    // Getting the search value through AJAX
    $srchValue = htmlspecialchars($_GET['srch_value']);
    
    // Performing some operations to the search value
    $search = strtolower($srchValue);
    $srchLen = strlen($srchValue);

    // This variable will show the suggestions according to user input
    $suggestion = '';

    // Database Connection
    require '_mySQLConnect.php';

    // Query to get all the previous searches made by the users
    $srchQuery = 'SELECT `srch_value` FROM `user_searches`';
    $srchRes = mysqli_query($con,$srchQuery);

    if($srchValue != '')
    {
        // If there is some values
        // First carry out all the previous searches
        while($row = mysqli_fetch_assoc($srchRes))
        {
            $prevSrch = $row['srch_value'];

            // perform some actions to find the words inputted by the user into the previous search
            if(stristr($search,substr($prevSrch,0,$srchLen)))
            {
                // Search match found now get that prev ques and show to the user
                if($suggestion === '')
                {
                    // If suggestion is still not made
                    $suggestion = '<li class="suggestion"><a href="partials/_insertSearch.php?srch='.$prevSrch.'">'.$prevSrch.'</a></li>';
                }
                else
                {
                    // There are some suggestions
                    $suggestion.= '<li class="suggestion"><a href="partials/_insertSearch.php?srch='.$prevSrch.'">'.$prevSrch.'</a></li>'; 
                }
            }
        }

        // If still suggestions are not found
        if($suggestion === '')
        {
            // Output some message
            echo '1';
        }
        else
        {
            // Show the suggestion
            echo $suggestion;
        }

    }

?>