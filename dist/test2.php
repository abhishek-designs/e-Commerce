<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $comment = $_POST['comment'];

        if(!empty($name))
        {
            $name_data = $name;
        }
        else
        {
            echo '0';
        }

        if(!empty($mail))
        {
            $mail_data = $mail;
        }
        else
        {
            echo '1';
        }

        if(!empty($comment))
        {
            $comment_data = $comment;
        }
        else
        {
            echo '2';
        }
        

        if(!empty($name_data) && !empty($mail_data) && !empty($comment_data))
        {
            // MySql connection
            $username = 'abhi';
            $server = 'localhost';
            $password = 'abhi@368';
            $database = 'test2';
            
        
                $con = mysqli_connect($server,$username,$password,$database);
        
                if($con)
                {
        
                    $query2 = 'insert into product(Name,Email,Comment) values(?,?,?)';
                    
                    $query = mysqli_prepare($con,$query2);
        
                    mysqli_stmt_bind_param($query,'sss',$name_data,$mail_data,$comment_data);
        
                    
                    if($query)
                    {
        
                        mysqli_stmt_execute($query);
                        
                        echo 'Executed';
                        
                    }
                    else
                    {
                        echo 'Execution Failed '.mysqli_error($con);
                    }
                }
                else
                {
                    echo 'Failed';
                }

        }

    }

    ?>