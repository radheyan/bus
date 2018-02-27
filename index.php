<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/a8e707840e.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/distancematrix/json?origins=Vancouver+BC|Seattle&destinations=San+Francisco|Victoria+BC&key=AIzaSyCFC_iKTNIUVYN8lTRFAf8Loe4mgJMYEt8"></script> -->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- <script src="main.js"></script> -->
<style>
body{

    font-family: 'Roboto', sans-serif;
}
.flex-container
{
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>  


<?php 

$sql= new mysqli('localhost','root', '', 'gps' );

if($sql->connect_error)

    { die("connection failed:". $sql->connect_error);
    }
 

$querry= $sql->query("select * from test where 1");



?>






</head>
<body>
<div class="container">
    <section class="container">
    <div class="row">
            <div class="col-md-offset-4 col-md-4" style="margin-top:20vh;"> 
                <label>FROM:</label>
                <input type="text" class="form-control" value="Thiruvanmiyur">    
                <label style="margin-top:5px;">TO:</label>
                <input type="text" class="form-control" value="Tambaram">
                <div class="text-center"><button type="button" class="btn btn-primary" style="margin-top:5px; border-radius:5px;">Submit</button></div>
            </div>
        </div>
    </section>
    <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                        <th>Bus Number</th>
                        <th>From</th>
                        <th>Destination</th>
                        <th>ETA</th>
                        </tr>
                    </thead>
                    <tbody id="tbody"><tr>
                    <?php 
                    if($querry!==FALSE){
    
                        while($row = mysqli_fetch_array($querry))
                        {
                          echo "
                          <td>".$row["bus_no"]."</td>
                          <td>".$row["source"]."</td>
                          <td>".$row["dest"]."</td>
                          ";  
                     }
                           
                  
                     } ;
                    

                    ?>
                    </tr>
                           </tbody>   
                  
                </table>
            </div>
    </div>
</div>
</body>
</html>