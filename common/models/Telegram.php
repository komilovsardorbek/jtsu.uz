<?php

namespace common\models;

class Telegram
{
    public $text;
    private $_token = '1629995952:AAECwVWtkRt7_lbHDLqfle_prqyGijEVsw4';
    private $_chatId = '-1001435911697';
    private $_params = [];

    public function __construct($text)
    {
        $this->_params = [
            'chat_id' => $this->_chatId,
            'parse_mode' => 'HTML',
            'text' => $text
        ];
    }

    public function sendMessage()
    {
        return file_get_contents('https://api.telegram.org/bot' . $this->_token . '/sendMessage?' . http_build_query($this->_params));
    }
}
