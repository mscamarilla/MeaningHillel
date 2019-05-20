<?php

if (stristr($mtext, 'Мэтр, поговори со мной') !== false || stristr($mtext, 'мэтр, поговори со мной') !== false) {
    $bot->sendMessage($cid, getBashQuote());
}


function getBashQuote()
{
    // Create DOM from url
    $html = file_get_html('https://bash.im/random');
    // Use a selector to reach the content you want
    $quote = $html->find('.quote__body', 0)->plaintext;


    return $quote;

}