<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body style="margin: 50px;">
    <h1>List of fruits</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>price</td>
                <td>quality</td>
                <td>image</td>
                <td>code</td>
            </tr>
        </thead>
        <?php
        $severname="localhost";
        $username="root";
        $password="";
        $database="user_db";

        $conn=new mysqli($severname,$username,$password,$database);

        if($conn->connect_error){
            die("Connecion failed: " . $conn->connect_error);
        }


        // read all the  fruits name

        $sql="SELECT * FROM fruits";
        $result = $conn->query($sql);


        


        while($row=$result->fetch_assoc()){
         echo"   <tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["product_name"] . "</td>
            <td>" . $row["product_price"] . "</td>
            <td>" . $row["product_qty"] . "</td>
            <td>" . $row["product_image"] . "</td>
            <td>" . $row["product_code"] . "</td>
            
        </tr>";

        }


        ?>

       
    </table>

</body>
</html>