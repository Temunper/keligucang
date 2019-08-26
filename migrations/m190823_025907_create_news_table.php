<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m190823_025907_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->comment('标题'),
            'image' => $this->string()->comment('图片'),
            'brief' => $this->string()->comment('概述'),
            'content' => $this->text()->comment('内容'),
            'author' => $this->string(20)->comment('作者'),
            'source' => $this->string()->comment('来源'),
            'keywords' => $this->string()->comment('关键词'),
            'description' => $this->string()->comment('描述'),
            'created_time' => $this->dateTime(),
            'updated_time' => $this->dateTime(),
            'year' => $this->integer(4),
            'status' => $this->tinyInteger(4)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
