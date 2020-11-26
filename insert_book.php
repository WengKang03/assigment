<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Entry Results</title>
</head>
<body>
    <h1>Book Entry Results</h1>
    <?php
    // TODO 1: Create short variable names.
    $host = 'localhost';
    $pw = '';
    $db = 'publications';
    $un = 'root';

    // TODO 2: Check and filter data coming from the user.
    if (isset($isbn)&& 
        isset($author)&& 
        isset($title)&& 
        isset($price)){
    // TODO 3: Setup a connection to the appropriate database.
    $conn = new mysqli($host, $un, $pw, $db);
    if ($conn->connect_error){
        die("Connection failed");
    }
        $isbn = $_POST['isbn'];
        $author = $_POST['author'];
        $title = $_POST['title'];
        $price = $_POST['price'];
    // TODO 4: Query the database.
    $query = "INSERT into Category values($isbn, $author, $title, $price)";
    $result = $conn ->query($query);
    // TODO 5: Display the feedback back to user.
    if(!$result) die ('Insert Failed');
    else{
        echo "Success";
    }

    // TODO 6: Disconnecting from the database.
    $conn->close();
}
    ?>
</body>
</html>