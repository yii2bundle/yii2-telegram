<?php

namespace yii2bundle\telegram\domain\entities;

use yii2rails\domain\BaseEntity;

/**
 * Class UpdateEntity
 * 
 * @package yii2bundle\telegram\domain\entities
 * 
 * @property $id
 * @property $message
 */
class UpdateEntity extends BaseEntity {

	protected $id;
	protected $message;

}
