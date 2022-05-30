<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ArbG.</title>
  <link rel="stylesheet" href="style.css">
   <!-- Font Awesome Cdn Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <h1>Bonjour à Vous !</h1>
    <p>Bienvenue sur ArbreG. <br> Veuillez-Vous indentifier!</p>
    <form action="" method="POST">
      <input type="text" placeholder="Votre Email" name="email">
      <input type="password" placeholder="Mot de Passe" name="motdepass">
      <button type="submit">Se connecter </button> 
    </form>
    
    <p class="or">
      ----- Ou se connecter avec -----
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-instagram"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="not-member">
      Cliquez ici!<a href="../register/index.php">Si vous n'avez pas encore une compte</a>
    </div>
  </div>
  <?php 
session_start();
$host="localhost";
$user="root";
$password="";
$db="sgbd";

try{
    $relation = new PDO("mysql:host=" . $host . ";dbname=" . $db, $user, $password);
    $relation -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Une erreur s'est produite : " . $e -> getMessage();
}
// mysqli_connect($host,$user,$password);
// mysqli_select_db($db);

if(!empty($_POST['email']) && !empty($_POST['motdepass'])){
    $select = $relation -> prepare("SELECT email FROM admin WHERE email = :emaitso");
    $select -> execute([
      "emaitso" => $_POST["email"]
    ]);
    $nb_select = $select -> rowCount();
    if($nb_select == 0){
      ?>
      <script>
          alert("Compte inéxistant !");
      </script>
  <?php
    }else{
      $hash = password_hash($_POST["motdepass"], PASSWORD_BCRYPT);
      if(password_verify($_POST["motdepass"], $hash)){
        header('location: ../home/index.php');
      }
    }
    
    // $email=$_POST['email'];
    // $password=$_POST['motdepass'];
    
    // $sql="select * from admin where email='".$email."'AND mot_de_pass='".$password."' limit 1";
    
    // $result=mysqli_query($sql);
    
    // if(mysql_num_rows($result)==1){
    //   header('location: ../home/index.php');
    //     exit();
    // }
    // else{
    //     echo " You Have Entered Incorrect Password";
    //     exit();
    // }
        
}
?>
</body>
</html>
