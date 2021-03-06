<?php

namespace yii2bundle\telegram\domain\actions;

use TelegramBot\Api\Types\Message;

class ShowImageAction extends BaseAction {
	
	public $pic;
    public $caption = null;
    public $replyToMessageId = null;
    public $replyMarkup = null;
    public $disableNotification = null;
    public $parseMode = null;

	public function run(Message $message) {
        \App::$domain->telegram->response->sendImage($message, $this->pic, $this->caption, $this->replyToMessageId, $this->replyMarkup, $this->disableNotification, $this->parseMode);
	}
	
}
