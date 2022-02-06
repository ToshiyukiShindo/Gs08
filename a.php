<?php require_once('userLayout_login.php'); ?>
<?php
function connect(){
    $pdo = new PDO('mysql:dbname=gs-project;port=3306;host=localhost;charset=utf8','root','root');
    return $pdo;
}
?>

<!-- ログイン情報の取得 -->
<?php
session_start();
if (!isset($_SESSION["login"])) {
    header('location: userPortal.php');
}else {
    $message = $_SESSION['login']."さん、ようこそ！";
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
<section class="container2">
<p style="font-size: 20px;font-weight: bold;margin: 5px 0 0 5px"><?= $message ?></p>
    <div class="title">
        <h4 class="titletext">動画診断 (2/2)</h4>
    </div>
    <hr>
    <p>a</p>

    <!-- 問１ -->
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
        Default radio
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
        Default checked radio
        </label>
    </div>

    <!-- 問２ -->
    <label for="exampleDataList" class="form-label">Datalist example</label>
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
    <datalist id="datalistOptions">
        <option value="San Francisco">
        <option value="New York">
        <option value="Seattle">
        <option value="Los Angeles">
        <option value="Chicago">
    </datalist>

    <!-- 問３ -->
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
    </div>

    <div style="margin: 20px 0;">
        <button type="button" class="btn btn-info" id="transbtn" style="border-bottom: 5px;">次へ</button>
    </div>
</section>


</body>
</html>