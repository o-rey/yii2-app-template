<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\models;

/**
 * Custome ActiveRecord class is used to extend base AR functionality
 */
class ActiveRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function fields()
    {
        $fields = parent::fields();
        return array_merge($fields, ['created', 'updated']);
    }

    /**
     * @inheritdoc
     */
    public static function find()
    {
        return new ActiveQuery(get_called_class());
    }

    /**
     * @inheritdoc
     */
    public function beforeSave($insert)
    {
        # populating magic fields
        if ($insert) {
            # record owner
            if ($this->hasAttribute('owner_id') && !isset($this->owner_id)) {
                $this->owner_id = \Yii::$app->user->id;
            }
        }

        return parent::beforeSave($insert);
    }

    /**
     * Returns human-readable date of creation
     *
     * @return string|null
     */
    public function getCreated()
    {
        return $this->created_at ? date('d-m-Y', $this->created_at) : null;
    }

    /**
     * Returns human-readable date of last update
     *
     * @return string|null
     */
    public function getUpdated()
    {
        return $this->updated_at ? date('d-m-Y', $this->updated_at) : null;
    }

}
