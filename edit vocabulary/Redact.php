<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple English</title>
<!--        <script src="../js/script.js"></script>-->
    </head>
    <body>
        Redact
        <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
            <h1>Добавление слова для изучения:</h1><br>
            Английское слово: 
            <input type="text" name="english_word" id="english_word"><br>
            Перевод на русском:
            <input type="text" name="russian_word" id="russian_word"><br>
            <input type="submit" name="add_word" value="Добавить в словарь">
        </form>
        <?php
        
        if(isset($_REQUEST['add_word'])){
            echo "add_word";
            require_once './Vocabulary_txt.php';
           // echo "<br> ".ROOT;
           Vocabulary_txt::create_vocabulary();
         //  Vocabulary_txt::fwrite_txt();
           echo "<br>";
          // Vocabulary_txt::fread_txt();
        }
        ?>
    </body>
</html>
