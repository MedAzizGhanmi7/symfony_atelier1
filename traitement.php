<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des clubs</title>
</head>
<body>
   <h1>Affichage des clubs</h1> 

<?PHP 
if (
   empty($_GET ["nom"])||empty($_GET ["id"])||empty($_GET ["description"])
   ||empty($_GET ["adresse"])||empty($_GET ["domaine"])
  ) {
    echo "<h2>Champs manquants</h2>";
  }

  else { 
    echo "<table border='1'>
    <tr>
        <th>Champ</th>
        <th>Valeur</th>
    </tr>";
   
    foreach ($_GET as $champ => $valeur){
       
        echo "<tr><td>$champ</td><td>$valeur</td></tr>"; 
    }


  }
?>


</body>
</html>