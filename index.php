<!DOCTYPE html>
<html>
<head>
    <title>PHP Hello World</title>
</head>
<body>
    <h1>Hello World from OpenShift Dev!</h1>
    <p>My first PHP application is running successfully.</p>

    <?php
        echo "<h2>Welcome to PHP on OpenShift!</h2>";
        echo "<p>PHP Version: " . phpversion() . "</p>";
        echo "<p>Application Status: Running</p>";
    ?>
</body>
</html>
