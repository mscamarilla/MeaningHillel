<?php
//добавить крон
// https://rinz.com.ua/meaning_hillel/index.php?lesson
//https://rinz.com.ua/meaning_hillel/index.php?coworking
//https://rinz.com.ua/meaning_hillel/index.php?goodmorning

if(isset($_GET['lesson'])) {

    $bot->sendMessage(-283260305, getLessonText()); //id захардкожен, потому что бота нет в группе и  постить он никуда не может. нужны ли ему права администратора?
}

if(isset($_GET['coworking'])) {
    $bot->sendMessage(-283260305, getCoworkingText());
}

if(isset($_GET['goodmorning'])) {
    $bot->sendMessage(-283260305, getGoodMorningText()); //вписать имя пользователя
    $bot->sendMessage(-283260305, getFlirt());
}

if(!empty($_GET['say_it'])) {
    $bot->sendMessage(-283260305, $_GET['say_it']); //произвольная фраза из гета
}


function getLessonText(){
    $text = [
        'Го на пару, я создал',
        'Пора преисполняться познанием',
        'Заходят как-то 11 php-программистов в аудиторию...',
        'Чупа-чупсов завезли',
        'Вангую, будет жесть',
        'Он сказал "Поехали" и выключил свет',
        'Я тут пока поскучаю... один... без вас...',
        'А @username выйдет? А скиньте код...',
        'Мне только спросить!',
        'Кто последний, тот лох',
        'А в тюрьме сейчас ужин... макароны...',
        'Тяжело в учении, легко препода группой бить :D',
        'Я так понимаю, редбуллов уже не осталось...',
        'С сервером или на сервере! кхе.. Со щитом или на щите!'
            ];
    $all = count($text);
    $rand = rand(0,$all-1);
    return $text[$rand];
}

function getCoworkingText(){
    $text = [
        'Работать, масеги)',
        'Кто не работает, тот ест',
        'А может нафиг терминал? Пошли на море?',
        'Я так и знал',
        'Не, работать - это без меня',
        'Вопрос. Что мы будем делать в терминале, если все сдадут дз? Да не, бред какой-то...',
        'Вы понимаете, что у нормальных людей сегодня выходной?',
        'Предлагаю Иру связать и заставить отдыхать',
        'Печеньки захватите!',
        'В терминале громко не ржать! Нормальные люди пугаются',
        'Пойду пока перекомпилюсь',
        'Ну, надеюсь это все не зря',
        'Только давайте не как в прошлый раз',
        'Понеслась)'
            ];
    $all = count($text);
    $rand = rand(0,$all-1);
    return $text[$rand];
}

function getGoodMorningText(){
    $text = [
        'Доброе утро! Как спалось?',
        'Мааам, еще пять минуточек',
        'Да встал я... Встал....',
        'Собрался, собрался.. Разобрался.',
        'Почему мир подстраивается под жаворонков? Что за дискриминация сов?',
        'Прекрасное утро, не правда ли?',
        'Утра! Давайте сегодня бодрячком, мир ждет, чтоб его спасли!',
        'Что снилось? Мне - электроовцы...',
        'Говорят, что если ложиться вовремя, то можно выспаться. Врут, наверное',
        'Вы все сегодня необычайно красивые) Пусть у вас будет хороший день!',
        'Я, конечно не китайская печенька, но: Сегодня произойдет что-то волшебное',
        'Какая-то недружелюбная среда.. или какой там день сегодня',
        'Мне нужно очень много кофе. И подоконник с пледиком...',
        'Доброго утра, масеги)'
            ];
    $all = count($text);
    $rand = rand(0,$all-1);
    return $text[$rand];
}

function getFlirt(){
    $begining = [
        'Кстати, ',
        'Между прочим, ',
        'Вам, может, и не интересно, но ',
        'А ',
        'Смешно сказать, но ',
        'Только не смейтесь, '
    ];

    $ending = [
        'Мда...',
        'Хе-хе)',
        'Это был хороший сон.',
        'Хих)))',
        'Да...',
        'Я был удивлен!'
    ];

    $users = [
        '@mscamarilla',
        '@Nikolay_orloB',
        '@Karpus_Alex',
        '@natalinateli',
        '@Zerholarus',
        '@Tiron787',
        '@enot.racoon.al',
        '@VladAD'
            ];
    $all_users = count($users);
    $rand_users = rand(0,$all_users-1);

    $all_begining = count($begining);
    $rand_begining = rand(0,$all_begining-1);

    $all_ending = count($ending);
    $rand_ending = rand(0,$all_ending-1);

    if ($users[$rand_users] == '@mscamarilla' || $users[$rand_users] == '@natalinateli'){
        $suffix = 'приснилась';
    } else {
        $suffix = 'приснился';
    }

    return $begining[$rand_begining] . "мне сегодня " . $suffix . " ".$users[$rand_users] . "... " .$ending[$rand_ending];
}
