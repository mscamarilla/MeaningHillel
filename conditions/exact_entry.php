<?php

/**
 * ответ на определенные слова по точному вхождению
 */
if ($mtext == 'всмысле' || $mtext == 'Всмысле' || $mtext == 'В смысле' || $mtext == 'всмысле?' || $mtext == 'всмысле??') {
    $bot->sendMessage($cid, "всмысле всмысле?");
}

if ($mtext == 'Валар моргулис') {
    $bot->sendMessage($cid, "Валар дохаэрис");
}

if ($mtext == 'Мэтр'|| $mtext == 'мэтр') {
    $bot->sendMessage($cid, 'Что, ' . $name . '?');
}