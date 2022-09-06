<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon_package_v0.16/favicon.ico" type="image/ico" sizes=320x320>
    <link rel="stylesheet" href="css/style1.css" />
    <title>Obrisi knjigu</title>


</head>

<body>


    <h2>Obrisi knjigu</h2>
    <hr style="height: 1px; background-color: white; margin-top: 3px">
    <div id="background-img-delete"></div>

    <div class="main">
        <div class="header">Podaci o knjizi:</div>
        <form action="deleteBook.php" id="frmBox" method="post" onsubmit="return formSubmit();">
            <input type="number" name="id_knjige" class="main-part" placeholder="Unesi ID knjige..." required>
            <input type="text" name="naslov" class="main-part" placeholder="Unesi naziv knjige..." pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" required>
            

        
            <input type="submit" name="submit" class="sub-btn" value="Submit">
            <h3 id="success"></h3>
        </form>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>

</html>