<html>
    <style>
        .container{
            width: 18rem;
            height: 8rem;
            background-color: #8687bd;
            color: #b1a5b1;
            margin: .5rem;
        }
        .title{
            background-color: #223663;
            color: #b1a5b1;
            height: 1.5rem;
            text-align: center;
            padding-top: 4px;
        }
        .body{
            padding: 5px;
            color: #223663;
        }
        .body div{
            padding: 2px;
        }
    </style>
</html>
<?php
    $title = $_GET['s'];
    $conn=new mysqli("localhost","root","mysql123","phplab");
    $sql = "SELECT * FROM `library` WHERE `title` = '$title' ";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        echo "<div class='container'><div class = 'title'><b>".$row["title"]."</b></div><div class='body'><div>".$row["accsno"]."</div><div>".$row["author"]."</div><div>".$row["edition"]."</div><div>".$row["publisher"]."</div></div></div>";
    }
    else{
        echo "<div class = 'title'>Not Found</div>";
    }
?>