
<?php

    $servername="localhost";
    $username="root";
    $dbpassword="";
    $dbname="bookstore";

    $conn=mysqli_connect($servername, $username, $dbpassword, $dbname);
    $sql = "SELECT * FROM zanr_knjige";
    $res = mysqli_query($conn,$sql);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="shortcut icon" href="images/favicon_package_v0.16/favicon.ico" type="image/ico" sizes=320x320>
    <link rel="stylesheet" href="css/style1.css" />
    <title>Pretraživanje knjige</title>
    
</head>

<body>
    <div class="headerPronadji">
        <h2>Pronađi željenu knjigu:</h2>
    </div>
    <hr style="height: 1px; background-color: white; margin-top: -130px">
    <div id="background-img3"></div>

    <div class="container"  >
        <div class="select-box" >
            <div class="options-container">

                <?php
                    while($rows = mysqli_fetch_array($res)){
                ?>
                <div class="option" > 
                    <option value="<?php echo $rows['naziv_zanra'];  ?>">   
                    
                    <?php echo $rows['naziv_zanra'];  ?> 
                    
                </div>
                    </option>
                <?php
                    } 
                ?>
            </div>


            <div class="selected">
                Izberi željeni žanr                    <!--OVde smo prebacili da stoji nakon option container-a, da bismo izdvojili Izaberi zanr od ponudjenih odgovora-->
            </div>
        </div>
    </div>


    <div class="tableBooks">
    <table>
        <thead>
            <th>Naslov knjige  </th>
            <th>Autor </th>
            <th>Žanr </th>
            <th>Izdavač </th>
            <th>Godina izdanja </th>
            <th>Cena </th>
        </thead>  
        <tbody id="ans">
        
        </tbody>
    </table>
    </div>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <script src="js/main.js"></script>
</body>

</html>