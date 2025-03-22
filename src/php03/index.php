<?php

require_once('config/status_codes.php');

$random_numbers = array_rand($status_codes, 4);

foreach ($random_numbers as $index) {
$options[] = $status_codes[$index];
}
$question = $options[mt_rand(0, 3)];


?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/index.css">

</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03">
                Status Code Quiz
            </a>
        </div>
    </header>
    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q.以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text"></p>
            </div>
            <form class="quiz-form" action="result.php" method="post"
            <input type="hidden" name="answer_code" value=""
            <div class="quiz-form__item">
                <div class="quiz-form__group">
                   <input class="quiz-form__radio" id="" type="radio" name="option" value="">
                   <label class="quiz-form__label" for="">
                  </label>
                </div>
            </div>
            <div class="quiz-form__button">
                <button class="quiz-form__button-submit" type="submit">
                    回答
                </button>
            </div>
            </form>
        </div>
    </main>
    <div class="result__content">
        <div class="result">
            <h2 class="result__text--correct">正解</h2>
            <h2 class="result__text--incorrect">不正解</h2>
        </div>
    </div>

</body>
</html>