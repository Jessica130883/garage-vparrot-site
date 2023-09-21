<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];
    
    echo "Merci, votre formulaire a été soumis avec succès.";
}

/* VALIDATION DES DONNÉES */

$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Votre email a bien été envoyé.";
} else {
    echo "L'adresse email n'est pas valide";
}

if (preg_match("/^[0-9]{10}$/", $phone)) {
    echo "Numéro de téphone valide";
} else {
    echo "Numéro de téléphone non valide";
}
if(strlen($message) < 10 || strlen($message) > 500) {
    echo "Votre message est trop long.";
}

/* CONNEXION DATABASE*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utilisateurs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
  }

  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $message = $_POST['message'];
  
  
  $sql = "INSERT INTO nom_de_votre_table (prenom, nom, email, telephone, message)
          VALUES ('$prenom', '$nom', '$email', '$telephone', '$message')";
  
  
  if ($conn->query($sql) === TRUE) {
    echo "Les données ont été insérées avec succès.";
  } else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
  }
  
  
  $conn->close();

  /* MDP */
  $hashed_password = password_hash('password*', PASSWORD_DEFAULT);

  
  ?>