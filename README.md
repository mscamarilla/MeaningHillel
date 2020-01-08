# MeaningHillel - всмысле (untranslatable)

Telegram bot for my group in Hillel.

V1.0

- Responds to trigger words and replies with prepared phrases. Considers exact and not exact entry. Can respond with pictures.
- Able to detect the user's name.
- Responds with a random quote from bash.im to the phrase "Мэтр, поговори со мной". The used parser is simple_html_dom.
- New phrases are added via the /new_idea command, written to a file by the name of the user who added the phrase. Adding occurs manually.
- Every morning at 9 o'clock he writes a phrase-wish for a day in the group chat, informs who he "dreamed of".
- Before each lesson at school gives a motivating phrase.

Installation
1. copy all files on a server with SSL
2. install composer
3. register new bot via @BotFather
4. get API key, put it in index.php on 10 line
5. execute command in console: php composer.phar require telegram-bot/api

# MeaningHillel - всмысле

Telegram бот для моей группы в Hillel.

V1.0

- Реагирует на определенные слова-триггеры и отвечает заготовленными фразами. Учитывает точное и не точное вхождение. Умеет отвечать картинками.
- Умеет обращаться к пользователю по имени.
- На фразу "Мэтр, поговори со мной" отвечает случайной цитатой с bash.im. Используется парсер simple_html_dom.
- Новые фразы добавляются через команду /new_idea, записываются в файл по имени пользователя, добавившего фразу. Добавлениие новых фраз происходит вручную.
- Каждое утро в 9 часов пишет в гупповой чат фразу-пожелание на день, сообщает кто ему "снился".
- Перед каждым занятием в школе выдает мотивирующую фразу.

Установка
1. на сервер с SSL перенести все файлы
2. установить composer
3. зарегистрировать нового бота через @BotFather
4. получить от него API key, внести его в index.php на 10 строку
5. выполнить в консоли команду php composer.phar require telegram-bot/api
