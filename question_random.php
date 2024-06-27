<?php
$answer = isset($_GET['answer']) ? $_GET['answer'] : 'No keyword provided';
$question_number = isset($_GET['question_number']) ? $_GET['question_number']+1 : 'No fixed variable provided';

switch ($question_number) {
    case "1":
        include 'question1.php?question_number=$question_number';
        break;
    case "2":
        include 'question2.php';
        break;
    case "3":
        include 'question3.php';
        break;
    default:
        echo "はいバグ～無効な選択肢～";
        break;
}
?>