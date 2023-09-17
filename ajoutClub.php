<?PHP 
include('classes.php');

$id=$_POST['id'];
$nom=$_POST['nom'];
$description= $_POST['description'];
$adresse= $_POST['adresse'];
$domaine= $_POST['domaine'];

$club1 = new club ($id,$nom,$description,$adresse,$domaine);

var_dump($club1)
?>