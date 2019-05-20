<?php
if (stristr($mtext, 'дай мне id чата') !== false && $username == 'mscamarilla') {
    $bot->sendMessage($cid, $cid);
}
if (stristr($mtext, 'Спасибо, Мэтр') !== false && $username == 'mscamarilla') {
    $bot->sendMessage($cid, "Все для тебя");
}