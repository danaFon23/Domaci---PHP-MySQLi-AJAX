<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon_package_v0.16/favicon.ico" type="image/ico" sizes=320x320>
    <link rel="stylesheet" href="css/style1.css" />
    <title>Dodavanje knjige</title>


</head>

<body>


    <h2>Dodaj novu knjigu</h2>
    <hr style="height: 1px; background-color: white; margin-top: 3px">
    <div id="background-img2"></div>

    <div class="main">
        <div class="header">Podaci o knjizi:</div>
        <form action="insertBook.php" id="frmBox" method="post" onsubmit="return formSubmit();">
            <input type="number" name="id_knjige" class="main-part" placeholder="Unesi ID knjige..." required>
            <input type="text" name="naslov" class="main-part" placeholder="Unesi naziv knjige..." pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" required>
            <input type="text" name="autor" class="main-part" placeholder="Unesi autora..." pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" required>
            <input type="text" name="izdavac" class="main-part" placeholder="Unesi izdavaca..." pattern="[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" required>
            <input type="number" min="1700" max="2022" name="godina_izdavanja" class="main-part" placeholder="Unesi godinu izdanja..." required>
            <input type="number" name="cena" class="main-part" placeholder="Unesi cenu..." required step="0.01" >
            <select name="zanr" id="genre" class="main-part" placeholder="Izaberi žanr..." required>
                <option value="select">Izaberi žanr...</option>
                <option value="1">Roman</option>
                <option value="2">Biografija</option>
                <option value="3">Autobiografija</option>
                <option value="4">Naucna fantastika</option>
                <option value="5">Psihologija</option>
                <option value="6">Filozofija</option>
                <option value="7">Horor</option>
                <option value="8">Knjige za decu</option>
                <option value="9">Triler</option>
                <option value="10">Komedija</option>
            </select>

        
            <input type="submit" name="submit" class="sub-btn" value="Submit">
            <h3 id="success"></h3>
        </form>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>

</html>