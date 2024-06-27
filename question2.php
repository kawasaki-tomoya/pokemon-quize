<?php
session_start();

$answer = isset($_GET['answer']) ? $_GET['answer'] : 'No keyword provided';
$question_number = isset($_GET['question_number']) ? $_GET['question_number']+1 : 'No fixed variable provided';

$poke_name = null;
$pokemonId = 1;

$min = 1;
$max = 151;
$url = "https://pokeapi.co/api/v2/pokemon-species/" . rand($min, $max);
$response = file_get_contents($url);

$data = json_decode($response, true);

foreach ($data['names'] as $name) {
    if ($name['language']['name'] == 'ja') {
        $poke_name = $name['name'];
    }
}

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
            <p><?php echo $poke_name; ?>のタイプは？</p>
            <form action="question_random.php?question_number=<?php echo $question_number; ?>" method="get">
                <label for="choice">選択してください:</label>
                <select name="choice" id="choice">
                    <option value="page1">みず</option>
                    <option value="page2">ほのお</option>
                    <option value="page3">くさ</option>
                </select>
                <input type="submit" value="送信">
            </form>



        </div>
    </section>
    
</main>
</body>
</html>
