<html>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</html>
<?php
// Create connection
$conn=new mysqli("localhost","root","mysql123","phplab");

class Books{
    function books($accsno,$title,$author,$edition,$publisher){
        $this->accsno = $accsno;
        $this->title = $title;
        $this->author = $author;
        $this->edition = $edition;
        $this->publisher = $publisher;
    }
    function save(){
        GLOBAL $conn;
        $sql="INSERT INTO `library` VALUES ('$this->accsno','$this->title','$this->author','$this->edition','$this->publisher')";
        if($conn->query($sql)===TRUE){
            echo"Record created successfully<br>";
            $this->display();
            
        }
        else{
            $this->display();
        }
    }
    function display(){
        GLOBAL $conn;
        $sql = "SELECT * FROM `library`";
        $result = $conn->query($sql);
        ?>
        <table>
            <tr>
                <th>Accessing no</th>
                <th>Title</th>
                <th>Author</th>
                <th>Edition</th>
                <th>Publisher</th>
            </tr>
        <?php
        while($row=$result->fetch_assoc()){
            echo "<tr><td>".$row['accsno']."</td><td>".$row['title']."</td><td>".$row['author']."</td><td>".$row['edition']."</td><td>".$row['publisher']."</td></tr>";
        }
        ?>
        </table>
        <?php
    }
    
}

// Check connection
if($conn->connect_error){
    die("Failed Connection");
}
else{
    $books = new Books($_POST["accsno"],$_POST["title"],$_POST["author"],$_POST["edition"],$_POST["publisher"]);
    $books->save();
}
?>
