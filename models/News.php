<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title 标题
 * @property string $image 图片
 * @property string $brief 概述
 * @property string $content 内容
 * @property string $author 作者
 * @property string $source 来源
 * @property string $keywords 关键词
 * @property string $description 描述
 * @property string $created_time
 * @property string $updated_time
 * @property int $status
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['created_time', 'updated_time'], 'safe'],
            [['status'], 'integer'],
            [['title', 'image', 'brief', 'source', 'keywords', 'description'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
            'brief' => 'Brief',
            'content' => 'Content',
            'author' => 'Author',
            'source' => 'Source',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'created_time' => 'Created Time',
            'updated_time' => 'Updated Time',
            'status' => 'Status',
        ];
    }
}
