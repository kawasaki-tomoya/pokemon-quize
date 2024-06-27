<?php
session_start();

$answer = isset($_GET['answer']) ? $_GET['answer'] : 'No keyword provided';
$question_number = isset($_GET['question_number']) ? $_GET['question_number']+1 : 'No fixed variable provided';

// セッションデータをクリア
//unset($_SESSION['num']);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポケモンクイズ</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header class="header">
        <img src="../img/pokemon-logo.png" alt="Logo" class="logo">
        <h1 class="title">ポケモンクイズ</h1>
</header>
<main>
    <section class="grid-container">
        <div class="grid-item">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/25.png" class="img" alt="ポケモン">
        </div>
    </section>
</main>
</body>
</html>
