<?php

namespace lav45\activityLogger\decorators;

use yii\db\ActiveRecord;

/**
 * Interface DecoratorInterface
 * @package lav45\activityLogger\decorators
 */
interface DecoratorInterface
{
    public const ID = null;

    /**
     * @return string
     */
    public function render();

    /**
     * @param ActiveRecord $model
     * @param string $attribute
     */
    public function load($model, $attribute);
}