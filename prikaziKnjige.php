<?php

    $servername="localhost";
    $username="root";
    $dbpassword="";
    $dbname="bookstore";

    $k = $_POST['id'];
    $k = trim($k);
    $conn=mysqli_connect($servername, $username, $dbpassword, $dbname);
    $sql = "SELECT * FROM knjige";
    $res = mysqli_query($conn,$sql);

    while($rows = mysqli_fetch_array($res)){

?>
    <tr>
        <td> <?php echo $rows['naslov'];  ?> </td>
        <td> <?php echo $rows['autor'];  ?> </td>
        <td> <?php echo $rows['zanr'];  ?> </td>
        <td> <?php echo $rows['izdavac'];  ?> </td>
        <td> <?php echo $rows['godina_izdavanja'];  ?> </td>
        <td> <?php echo $rows['cena'];  ?> </td>
    </tr>


<?php
    }
        

    echo sql;

?>