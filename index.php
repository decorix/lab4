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
            <form action="home.php" method="post">
                <div class="form-group">
                    <label class="form-label" for="name">ФИО</label>
                    <input class="inputs" id="name" type="text" name="name"  required value=<?php
                    if (isset($_GET['NAME'])) {
                        echo $_GET['NAME'];
                    } else {
                        echo '';
                    }
                    ?>>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="inputs" id="email" type="email" name="email" placeholder="Введите email" required value=<?php
                    if(isset($_GET["EMAIL"])){
                            echo $_GET["EMAIL"];
                        } else {
                            echo "";
                        }
                    ?>>
                </div>

                <div class="form-group">
                    <p class="form-label">Как вы узнали о нас?</p>
                    <input type="radio" name="source" id="marketing" value="marketing" 
                    <?php
                         if(isset($_GET['E']) && $_GET['E'] == 'marketing') {
                        echo 'checked';
                         }
                    ?>/>
                    <label for="marketing">Реклама в интернете</label>
                    <input type="radio" name="source" id="friends" value="friends" 
                    <?php
                         if(isset($_GET['E']) && $_GET['E'] == 'friends') {
                        echo 'checked';
                         }
                    ?>
                    />
                    <label for="friends">Рассказали друзья</label>
                </div>

                <div class="form-group">
                    <label class="form-label" for="category">Категория обращения</label>
                    <select name="category" id="category">
              <option value="grievance">Жалоба</option>
              <option value="proposal">Предложение</option>
            </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="message">Текст обращения</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Введите текст обращения" required>
                    <?php
                         if(isset($_GET['MESSAGE'])) {
                        echo $_GET['MESSAGE'];
                         } else {
                        echo '';
                         }
                    ?>
                    </textarea>
                </div>

                <div class="form-group">
                    <input type="file" name="attachment" id="attachment" />
                    <label for="attachment"></label>
                </div>

                <div class="form-group">
                    <input type="checkbox" name="agreement" id="agreement" required />
                    <label for="agreement">Даю согласие на обработку пользовательских данных</label
            >
          </div>
          <div class="button_container">
            <input class="button_signUp" type="submit" value="Отправить" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>