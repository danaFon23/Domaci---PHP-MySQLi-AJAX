<?php


     $servername="localhost";
     $username="root";
     $dbpassword="";
     $dbname="bookstore";

     $conn=mysqli_connect($servername, $username, $dbpassword, $dbname);
     if(!$conn)
     {
       die("Could not connect:".mysqli_connect_error());
     }

     else
     {
       $id_knjige='';
       $naslov='';
       

       if(isset($_POST['id_knjige']) && isset($_POST['naslov'])) {
          $id_knjige=test_input($_POST['id_knjige']);
          $naslov=test_input($_POST['naslov']);
          
       }
          $sql="DELETE FROM knjige WHERE naslov = '$naslov'";
          
          if(mysqli_query($conn, $sql)) 
          {
             echo "Knjiga je uspesno obrisana iz baze!";
          }

          else
          {
            echo "Brisanje knjige iz baze nije uspelo.";
          }
          
          mysqli_close($conn);
        }

        function test_input($data) {

            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;

        }




?>