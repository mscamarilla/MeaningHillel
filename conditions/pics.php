<?php
/**
 * отправка картинок в ответ на сообщения
 */
if (stristr($mtext, 'скучал') !== false || stristr($mtext, 'соскучился') !== false || stristr($mtext, 'соскучилась') !== false) {

    $pic = "https://rinz.com.ua/meaning_hillel/pics/miss.jpg";
    $bot->sendPhoto($cid, $pic);
}

if ($mtext == 'лол' || $mtext == 'лол)') {

    $pic = "https://rinz.com.ua/meaning_hillel/pics/lol.jpg";
    $bot->sendPhoto($cid, $pic);
}