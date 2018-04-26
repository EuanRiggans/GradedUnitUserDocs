<!DOCTYPE html>
<html>
    <head>
        <title>404 - Page not found</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);
        * { font-family: 'Open Sans', sans-serif; }
        h1 { font-size: 50px; }
        body { text-align:center; color: #333; }
        a { color:inherit; text-decoration:none; }
        a:hover { text-decoration:underline; }
        </style>
    </head>
    <body>
        <h1>404 - Page not found</h1>
        <p>We're sorry but that page has not been found!</p>
        <p><a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>">Click here to return to the home page</a></p>
    </body>
</html>
