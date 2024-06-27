<?php

$question_number = isset($_GET['question_number']) ? $_GET['question_number']+1 : 'No fixed variable provided';

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
                <h2><?php echo $question_number; ?>問目</h2>
                <p>このポケモンの名前は？</p>
                <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/25.png" class="img1" alt="ポケモン">
                <form action="question.php?question_number=<?php echo $question_number; ?>" method="get">
                    <label for="search">回答:</label>
                    <input type="text" id="search" name="answer" placeholder="答えを入力" required>
                    <input type="hidden" name="question_number" value="<?php echo htmlspecialchars($question_number); ?>">
                    <button type="submit">回答</button>
                </form>
            </div>
        </section>
        
    </main>
</body>
</html>
