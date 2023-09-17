<?PHP 
include('classes.php');
include('config.php'); 

$id=$_POST['id'];
$nom=$_POST['nom'];
$description= $_POST['description'];
$adresse= $_POST['adresse'];
$domaine= $_POST['domaine'];

$club1 = new club ($id,$nom,$description,$adresse,$domaine);

$db = config::getConnexion();
$query = $db->prepare("INSERT INTO club (id, nom, description, adresse, domaine) VALUES (?, ?, ?, ?, ?)");
$query->execute([$id, $nom, $description, $adresse, $domaine]);

config::afficherClubs(); 
?>