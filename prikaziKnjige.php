<?php
    require_once("konekcijaBaza.php");
    
    if(isset($_POST['id_zanra']))
    {
        $sql_provera = "SELECT * FROM knjige K JOIN zanr_knjige Z ON K.id_zanra= Z.id_zanra WHERE K.naslov != ''  AND Z.naziv_zanra = '".$_POST["id_zanra"]."'";
        $query_provera = $konekcija->query("SELECT * FROM knjige K JOIN zanr_knjige Z ON K.id_zanra= Z.id_zanra WHERE K.naslov != ''  AND Z.naziv_zanra = '".$_POST["id_zanra"]."'");

        if(($_POST['id_zanra'] != '') && ($query_provera->num_rows > 0))
        {
            $request = $_POST["id_zanra"];
            $sql = "SELECT K.naslov, K.autor, Z.naziv_zanra, K.izdavac, K.godina_izdavanja, K.cena FROM knjige K JOIN zanr_knjige Z ON K.id_zanra= Z.id_zanra WHERE Z.naziv_zanra = '$request'";        
            $res = mysqli_query($konekcija,$sql);

            while($rows = mysqli_fetch_array($res)){  
                ?>
                    <tr>
                     <td> <?php echo $rows['naslov'];  ?> </td>
                     <td> <?php echo $rows['autor'];  ?> </td>
                     <td> <?php echo $rows['naziv_zanra'];  ?> </td>
                     <td> <?php echo $rows['izdavac'];  ?> </td>
                     <td> <?php echo $rows['godina_izdavanja'];  ?> </td>
                     <td> <?php echo $rows['cena'];  ?> </td>      
                    </tr>;
                        
                <?php
            }
            echo $sql;
        }                                                                                                      
        else                                       
        {
            echo "Nema trenutno knjiga sa trazenim zanrom!";
        }
        
    }

?>




    





