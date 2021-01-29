<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    input{
      margin-bottom: 4px;
    }
  </style>
</head>
<body>
  <form action="savebook.php" method="post">
    <h3>Enter Book Details</h3>
    <input type="text" name="accsno" id="" placeholder = "Accession number"><br>
    <input type="text" name="title" id="" placeholder = "Title"><br>
    <input type="text" name="author" id="" placeholder = "Author"><br>
    <input type="number" name="edition" id="" placeholder = "Edition"><br>
    <input type="text" name="publisher" id="" placeholder = "Publisher"><br>
    <button style="background-color: green; color:antiquewhite" type="submit">Submit</button>
  </form>
  <a href="savebook.php">View books</a>
  <form action="viewbook.php" method="get">
    <h3>Seach with title</h3>
    <input type="text" name="s" id="">
    <button type="submit">Search</button>
  </form>
</body>
</html> 