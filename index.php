<!DOCTYPE html>
<html>
<head>
    <style>        p{
            text-align: center;
            font-size: 70px;
            font-family: arial;
            margin-top: 38vh;
            color: hotpink;
        }    </style>
</head>
    <body>
    <?php
            if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $comment = $_POST['comment'];
            echo "<p>";
                echo "Your name is : .$name";
            echo "<br> Email: .$email.";
            echo "<br> Telephone: .$telephone.";
            echo "<br> Comment: .$comment.";            echo "<p>";
        }        ?>    </body>
</html>
