<?PHP 

class club {
private $id;
private $nom;
private $description;
private $adresse;
private $domaine;

public function __construct($id , $nom ,$description,$adresse,$domaine)
{
  $this->id = $id;  
  $this->nom = $nom;
  $this->description = $description;
  $this->adresse = $adresse;
  $this->domaine = $domaine; 
}
public function afficherClub(){
    echo "id : {$this->id} <br> nom : {$this->nom} <br>  description : {$this->description} <br> adresse : {$this->adresse}<br> domaine : {$this->domaine} <br>" ;
}


}









?>