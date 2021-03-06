<?php

namespace yii2bundle\telegram\domain\routes;

use TelegramBot\Api\Types\Message;

class RegexpRoute extends BaseRoute {

	public function isMatch(Message $message) {
		$matches = $this->matchExp($message);
		return !empty($matches);
	}
	
	private function extractParams(Message $message) {
		$matches = $this->matchExp($message);
		$params = $this->extractParamsFromMatches($matches);
		return $params;
	}
	
	private function extractParamsFromMatches($matches) {
		$params = [];
		foreach($this->params as $order => $name) {
			$params[$name] = $matches[$order + 1];
		}
		return $params;
	}
	
	private function matchExp(Message $message) {
		$text = $message->getText();
		$text = mb_strtolower($text);
		$exp = mb_strtolower($this->exp);
		$isMatch = preg_match('/'.$exp.'/i', $text, $matches);
		if(!$isMatch) {
			return false;
		}
		return $matches;
	}
}
