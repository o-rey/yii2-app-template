<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\models;

/**
 * Custome ActiveQuery class is used to define common names scopes
 * that can be used in any query.
 */
class ActiveQuery extends \yii\db\ActiveQuery
{
    /**
     * Named scope limiting results to "active" (is_disabled == 0)
     *
     * @return ActiveQuery the newly created [[ActiveQuery]] instance
     */
    public function active()
    {
        $model = $this->modelClass;
        $this->andWhere([$model::tableName() . '.is_disabled' => 0]);
        return $this;
    }

    /**
     * Named scope limiting results to "recent"
     *
     * @param string $orderBy sort order
     * @param integer $limit limit
     * @return ActiveQuery the newly created [[ActiveQuery]] instance
     */
    public function recent($orderBy = 'created_at DESC', $limit = 5)
    {
        $this->orderBy($orderBy);
        $this->limit($limit);
        return $this;
    }

}
