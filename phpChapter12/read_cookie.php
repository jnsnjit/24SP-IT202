<html>
    <head>
        <title>Read Cookie Example</title>
    </head>
    <body>
        <?php
            $cookie_name = "userid";
            $userid = filter_input(INPUT_COOKIE,$cookie_name,FILTER_VALIDATE_INT);

            if (isset($userid)){
                echo "cookie named $cookie_name is set, value of cookie is $userid";
            }else{
                echo "cookie name $cookie_name is not set";
            }
        ?>
    </body>
</html>