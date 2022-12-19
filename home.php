<?php
include 'header.html';
?>

<html>
    <body>
    <div class="container">
        <div class="h1_container">
            <h1>Форма обратной связи</h1>
        </div>
        <div class="form_container">
        <?php 
            if (isset($_POST['category'])){
                echo '<p>Здравствуйте, '.$_POST['name'].'</p>';
                if ($_POST['category'] == 'Предложение') {
                    echo '<p> Спасибо за ваше предложение:</p>';
                    echo '<p class="form_div"><textarea readonly disabled rows="10" cols="30">'.$_POST['message'].'</textarea></p>';
                } else {
                    echo '<p> Мы рассмотрим Вашу жалобу:</p>';
                    echo '<textarea readonly disabled rows="10" cols="30">'.$_POST['message'].'</textarea>';
                }

            if (isset($_POST['attachment']) && $_POST['attachment'] != '') {
                echo '<p>Вы приложили следующий файл: ' . $_POST['attachment'].'</p>';
            }
                echo '<div class="button_container"><a href="index.php?NAME='.$_POST['name'].'&EMAIL='.$_POST['email'].'&E='.$_POST['source'].'"><button class="button_signUp">Заполнить снова</button></a><div>';

            } else {
            echo 'error';
            }
            ?>
      </div>
    </div>
  </body>
</html>

