<?php
if(isset($_POST['form'])) {
    echo 'Заголовок: ', $_POST['title'], '<br>';
    echo 'Текст: ', $_POST['content'];
}
?>
<form method="POST">
    <p>Заголовок: <input name="title"></p>
    <p>Текст: <textarea name="content"></textarea></p>
    <p><button name="form">Отправить!</button></p>
</form>