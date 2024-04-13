<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> -->
</head>

    <style>
        body {
            margin: 50px;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>

<body>
    <h1>List of Payment Done</h1>
    <button><a href="adminpage.php">Admin Page</button></a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Pmode</td>
                <td>Produtcs</td>
                <td>Ammount Paid</td>
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

        $sql="SELECT * FROM orders";
        $result = $conn->query($sql);


        


        while($row=$result->fetch_assoc()){
         echo"   <tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["phone"] . "</td>
            <td>" . $row["address"] . "</td>
            <td>" . $row["pmode"] . "</td>
            <td>" . $row["products"] . "</td>
            <td>" . $row["amount_paid"] . "</td>
            
        </tr>";

        }


        ?>

       
    </table>

</body>
</html>