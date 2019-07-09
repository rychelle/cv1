<?php

    $first_name = $e_mail = $message ="";
    $first_nameErr = $e_mailErr = $messageErr ="";

    if(isset($_POST["btn_submit"])){
        if(empty($_POST["first_name"])){
            $first_nameErr = 'Name is Required!';
        }
        else{
            $first_name = $_POST["first_name"];
        }

        if(empty($_POST["e_mail"])){
            $e_mailErr = 'Email is Required!';
        }
        else{
            $e_mail = $_POST["e_mail"];
        }

        if(empty($_POST["message"])){
            $messageErr = 'Message is Required!';
        }
        else{
            $message = $_POST["message"];
        }

        if($first_name && $e_mail && $message){
             $check_firstname = strlen($first_name);

             if($check_firstname < 2){
                $first_nameErr = "Your name is too short!";
             }else{
                header('Location: https://i.pinimg.com/originals/6f/00/05/6f0005b36025da455bf183cade4d5107.jpg');
             }
            
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>message</title>
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">    
    </head>
    <body>
    
    <div class="wrapper">
        <h1>Contact Me</h1>
        <p>Do you have any questions? Please do not hesitate to contact me direclty. I will come back to you within a matter of hours to help you</p>

        <form action="" method="POST">
           <input type="text"  class="line" name="first_name" placeholder="Your Name" value="<?php echo $first_name ?>"><span class="red"><?php echo $first_nameErr ?></span><br>
            <input type="email" class="line"  name="e_mail" placeholder="Your email" value="<?php echo $e_mail ?>"><span class="red"><?php echo $e_mailErr ?></span><br>
            <textarea type="text" class="line" rows="5" cols="50" name="message" placeholder="Your message" value="<?php echo $message ?>"></textarea><span class="red"><?php echo $messageErr ?></span><br>
            <input type="submit" class="btn" name="btn_submit" value="Send">
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

