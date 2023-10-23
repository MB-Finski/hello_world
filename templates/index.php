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
            height: 100%;
        }

        myHeader {
            background-color: #4CAFF0;
            color: #fff;
            border-radius: 10px; 
            padding: 10px;
            font-size: 36px; 
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <myPageContent>
        <?php
        if (isset($_GET['myMessage'])) {
            // Display the message if it is specified
            echo '<myHeader>' . $_GET['myMessage'] . '</myHeader>';
        } else {
            // If no get parameters were specified, display a button
            // that when clicked, reloads the page with the get parameter:
            // myMessage => "HelloWorld"
            echo '
            <myHeader>Press the button!</myHeader>
            <form method="GET" action="">
                <input type="hidden" name="myMessage" value="HelloWorld!">
                <button type="submit" name="myButton">Click Me</button>
            </form> ';
        }
        ?>
    </myPageContent>
</body>
</html>
