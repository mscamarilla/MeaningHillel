<?php
/**
 * ответ на вхождение некоторых слов в тексте сообщения
 */
if (stristr($mtext, 'не понимаю') !== false) {
    $bot->sendMessage($cid, "Чтоб понимать, нужно преисполниться в своем сознании...");
}

if (stristr($mtext, 'редбул') !== false || stristr($mtext, 'редбулл') !== false) {
    $bot->sendMessage($cid, "Кто сказал редбулл? Держите Алексея!");
}

if (stristr($mtext, 'кто уже в школе') !== false) {
    $bot->sendMessage($cid, "Все, кроме тебя, ага.");
}

if (stristr($mtext, 'тимбилдинг') !== false) {
    $bot->sendMessage($cid, "Как пьянку не назови, это все равно пьянка");
}

if (stristr($mtext, 'вопрос') !== false) {
    $bot->sendMessage($cid, "загугли");
}

if (stristr($mtext, 'звучит') !== false) {
    $bot->sendMessage($cid, "а нам с этим жить теперь...");
}

if (stristr($mtext, 'мы делали на паре') !== false) {
    $bot->sendMessage($cid, "Кто делал на паре?");
}

if (stristr($mtext, 'не верю') !== false) {
    $bot->sendMessage($cid, "Никому верить нельзя. Мне - можно.");
}
if ($mtext == 'что поиграть') {
     $bot->sendMessage($cid, "Москва, тебе на а - Амстердам, тебе на м");
}
if (stristr($mtext, 'Артур') !== false) {
    $bot->sendMessage($cid, "всмысле");
}
if (stristr($mtext, 'когда апдейт') !== false) {
    $bot->sendMessage($cid, "ну смотри, я пришел сюда сломать твой мозг и обновиться , как видишь мозг уже греется");
}

if (stristr($mtext, 'Мэтр, привет') !== false) {
    $bot->sendMessage($cid, 'Привет, ' . $name . '!');
}

if (stristr($mtext, 'Мэтр, как дела?') !== false) {
    $bot->sendMessage($cid, 'Кручусь :)');
}