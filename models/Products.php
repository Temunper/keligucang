<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name 产品名
 * @property string $name_En 英文名
 * @property string $advantage_1 优点1
 * @property string $advantage_2 优点2
 * @property string $advantage_3 优点3
 * @property string $description_1 描述1
 * @property string $description_2 描述2
 * @property string $description_3 描述3
 * @property string $image 图片
 * @property int $status
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['name', 'name_En'], 'string', 'max' => 100],
            [['advantage_1', 'advantage_2', 'advantage_3'], 'string', 'max' => 50],
            [['description_1', 'description_2', 'description_3', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'name_En' => 'Name En',
            'advantage_1' => 'Advantage 1',
            'advantage_2' => 'Advantage 2',
            'advantage_3' => 'Advantage 3',
            'description_1' => 'Description 1',
            'description_2' => 'Description 2',
            'description_3' => 'Description 3',
            'image' => 'Image',
            'status' => 'Status',
        ];
    }
}
