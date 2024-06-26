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
    <p><img src="../../img/pokemon-logo.png" alt="トップ画面"></p>
</head>
<body>
    <header>
        <h1>ポケモンクイズ</h1>
    </header>
    <main>

        <section class="grid-container">
            <div class="grid-item">
                <h2><?php echo $question_number; ?>問目</h2>
                <p>このポケモンの名前は？</p>
                <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/25.png" class="img" alt="ポケモン">
                <h2>回答</h2>


                <form action="question.php" method="get">
                    <label for="search">キーワード:</label>
                    <input type="text" id="search" name="answer" placeholder="答えを入力" required>
                    <input type="hidden" name="question_number" value="<?php echo htmlspecialchars($question_number); ?>">
                    <button type="submit">回答</button>
                </form>


                
            </div>
        </section>
        
    </main>
</body>
</html>
