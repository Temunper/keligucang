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
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

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
            ['year', 'integer', 'max' => 4],

            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],

            [['name', 'name_En'], 'string', 'max' => 100],
            [['advantage_1', 'advantage_2', 'advantage_3'], 'string', 'max' => 50],
            [['description_1', 'description_2', 'description_3', 'image'], 'string', 'max' => 255],
            [['description_1', 'description_2', 'description_3', 'image', 'name', 'name_En', 'year'], 'required']


        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '产品名',
            'name_En' => '英文名',
            'advantage_1' => '优势1',
            'advantage_2' => '优势2',
            'advantage_3' => '优势3',
            'description_1' => '描述1',
            'description_2' => '描述2',
            'description_3' => '描述3',
            'image' => '图片',
            'year' => '年份',
            'status' => '状态',
        ];
    }
}
