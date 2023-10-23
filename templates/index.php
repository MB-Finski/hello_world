<!DOCTYPE html>
<html>
<head>
    <title>Hello World Page</title>
    <style>
        /* Center the content vertically and horizontally */
        myPageContent {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <myPageContent>
        <?php
        if (isset($_GET['myMessage'])) {
            // Display the message if it is specified
            echo '<h1 style="font-size: 36px;">' . $_GET['myMessage'] . '</h1>';
        } else {
            // If no get parameters were specified, display a button
            // that when clicked, reloads the page with the get parameter:
            // myMessage => "HelloWorld"
            echo '
            <p><h1 style="font-size: 36px; margin-bottom: 20px;">Press the button!</h1></p>
            <form method="GET" action="">
                <input type="hidden" name="myMessage" value="HelloWorld!">
                <button type="submit" name="myButton">Click Me</button>
            </form> ';
        }
        ?>
    </myPageContent>
</body>
</html>
