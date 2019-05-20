<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// подключение API
require_once("vendor/autoload.php");

// создаем переменную бота
$token = "token";
$bot = new \TelegramBot\Api\Client($token);


// если бот еще не зарегистрирован - регистрируем
if (!file_exists("registered.trigger")) {
    /**
     * файл registered.trigger будет создаваться после регистрации бота.
     * если этого файла нет значит бот не зарегистрирован
     */

    // URl текущей страницы
    $page_url = "https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    $result = $bot->setWebhook($page_url);
    if ($result) {
        file_put_contents("registered.trigger", time()); // создаем файл дабы прекратить повторные регистрации
    }
}

// обязательное. Запуск бота
$bot->command('start', function ($message) use ($bot) {
    $answer = 'Привет)';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

// помощь. тоже обязательное
$bot->command('help', function ($message) use ($bot) {
    $answer = 'Это обязательная команда для моего существования, но я слишком самодостаточен, чтоб выполнять твои приказы.

Впрочем, используй /new_idea для добавления новых фраз. Например:
/new_idea Привет - И тебе привет.
Они будут добавлены при следующем апдейте. Не забудь про /new_idea в начале!';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

//библиотека для парсинга других сайтов
include_once('libs/simple_html_dom.php');

//собственно, магия, кокаин и единороги.
//sanity бота работает только если сообщение нужно выводить не по времени
if($_SERVER["REQUEST_METHOD"] != "GET") {
    include_once('sanity.php');
}
//если есть гет-запрос (cron), подключаем файл сообщений по времени
if(!empty($_GET)) {
    include_once('conditions/by_time.php');
}
// запускаем обработку
$bot->run();

//форма посылает GET запрос, который бот выдает в определенный чат. Ну, такой костылик, да
$html = '<form method="get">';
$html .= '<input type="text" name="say_it">';
$html .= '<input type="submit">';
$html .= '</form>';
echo $html;
