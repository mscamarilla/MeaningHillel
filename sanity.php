<?php
//отслеживает все сообщения в чатах, где находится бот (и в его личном, соответственно, тоже)
$bot->on(function ($Update) use ($bot) {
    $message = $Update->getMessage();
    $mtext = $message->getText();
    $cid = $message->getChat()->getId();
    $username = $message->getFrom()->getUserName(); //ник пользователя без @
    $name = $message->getFrom()->getFirstName(); // имя пользователя

    // пишем в логи всю личку бота. На всякий случай...
    $date = date('d-m-Y h:i:s');

    if(empty($username)){
        $username = 'unknown';
    }

    if (!file_exists("all_log/" . $username . ".txt")) {
        file_put_contents("all_log/" . $username . ".txt", $date . ' ' . $mtext . "\n");
    } else {
        $handle = fopen("all_log/" . $username . ".txt", 'a');
        fwrite($handle, $date . ' ' . $mtext . "\n");
        fclose($handle);
    }

    //пишем в лог все новые фразы
    if (stristr($mtext, '/new_idea') !== false) {
        $bot->sendMessage($cid, "Записано! Спасибо");

        if(empty($username)){
            $username = 'unknown';
        }
        if (!file_exists("all_log/" . $username . ".txt")) {
            file_put_contents("ideas_log/" . $username . ".txt", $date . ' ' . $mtext . "\n");
        } else {
            $handle = fopen("ideas_log/" . $username . ".txt", 'a');
            fwrite($handle, $date . ' ' . $mtext . "\n");
            fclose($handle);
        }
    }

    //админские штучки)
    include_once('conditions/admin.php');

    //точное вхождение, ответ текстом
    include_once('conditions/exact_entry.php');
    //неточное вхождение, ответ текстом
    include_once('conditions/inaccurate_entry.php');
    //неточное вхождение, ответ картинкой
    include_once('conditions/pics.php');

    //no comments
    include_once('conditions/real_stuff.php');


    //имя пользователя
    /*if (stristr($mtext, 'мое имя') !== false) {
        $bot->sendMessage($cid, $name);
    }*/



    //ник пользователя, без @
    /*if (stristr($mtext, 'мой ник') !== false) {
        $bot->sendMessage($cid, $username);
    }*/



}, function ($message) use ($name) {
    return true; // когда тут true - команда проходит
});