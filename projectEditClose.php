<?php require_once('userLayout_login.php'); ?>
<?php
function connect(){
    $pdo = new PDO('mysql:dbname=gs-project;port=3306;host=localhost;charset=utf8','root','root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
?>
<?php
try{
    $pdo = connect();
    $peid = $_POST['peid'];
    $peowner = $_POST['peowner'];
    $petitle = $_POST['petitle'];
    $pecategory = $_POST['pecategory'];
    $pegoal = $_POST['pegoal'];
    $peamount = $_POST['peamount'];
    $peimg = $_POST['peimg'];
    $pedes = $_POST['pedes'];
    $sqlPedit = "UPDATE `projects` SET `owner`='$peowner',`title`='$petitle',`category`='$pecategory',`goal`='$pegoal',`target`='$peamount',`imageurl`='$peimg',`otherdescription`='$pedes' WHERE `id` LIKE :id";
    $statement = $pdo->prepare("$sqlPedit");
    $statement->bindValue(':id',$peid,PDO::PARAM_INT);
    $statement->execute();
    $message="登録に成功しました。";
} catch (PDOException $e){
  $message="登録に失敗しました。";
}
$message = htmlspecialchars($message);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="container">
        <p>ご登録ありがとうございました！</p>
        <div><a class="btn btn-info btn-sm" href="myProjectList.php" role="button" style="height: 2rem; width: 100px;">MyProject </a></div>
    </section>
</body>
</html>