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
       $autor='';
       $godina_izdavanja='';
       $zanr='';
       $izdavac='';
       $cena='';

       if(isset($_POST['id_knjige']) && isset($_POST['naslov']) && isset($_POST['autor']) && 
          isset($_POST['godina_izdavanja']) && isset($_POST['zanr']) && isset($_POST['izdavac']) && isset($_POST['cena'])) {
          $id_knjige=test_input($_POST['id_knjige']);
          $naslov=test_input($_POST['naslov']);
          $autor=test_input($_POST['autor']);
          $godina_izdavanja=test_input($_POST['godina_izdavanja']);
          $zanr=test_input($_POST['zanr']);
          $izdavac=test_input($_POST['izdavac']);
          $cena=test_input($_POST['cena']);
       }
          $sql="INSERT INTO knjige(id_knjige, naslov, autor, godina_izdavanja, id_zanra, izdavac, cena) VALUES 
                ('$id_knjige', '$naslov', '$autor', '$godina_izdavanja', '$zanr', '$izdavac', '$cena')";
          
          if(mysqli_query($conn, $sql)) 
          {
             echo "Još jedna knjiga je uspešno dodata u bazu!";
          }

          else
          {
            echo "Dodavanje knjige u bazu nije uspelo.";
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