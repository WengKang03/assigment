<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search Results</title>
</head>
<body>
    <h1>Book Search Results</h1>
    <?php
    // TODO 1: Create short variable names.
    $searchtype = $_POST['searchtype'];
    $searchterm = $_POST['searchterm'];

    require_once "insert_book.php";
    // TODO 2: Check and filter data coming from the user.
    if(isset($searchtype) && isset($searchterm)){

    // TODO 3: Setup a connection to the appropriate database.
    $conn = new mysqli($host, $un, $pw, $db);
    if ($conn->connect_error){
        die("Connection failed");
    }
    // TODO 4: Query the database.
    $query = "INSERT into Category WHERE $searchtype like $searchterm ";
    $result = $conn ->query($query);
    
    // TODO 5: Retrieve the results.
    $rows = $result->num_rows;

    // TODO 6: Display the results back to user.
        for ($j = 0; $j < $rows; $j++) {
            $row = $result->fetch_array(MYSQLI_NUM);
        }
    // TODO 7: Disconnecting from the database.
    $conn->close();
}
    ?>
</body>
</html>