<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m190823_030911_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->comment('产品名'),
            'name_En' => $this->string(100)->comment('英文名'),
            'advantage_1' => $this->string(50)->comment('优点1'),
            'advantage_2' => $this->string(50)->comment('优点2'),
            'advantage_3' => $this->string(50)->comment('优点3'),
            'description_1' => $this->string()->comment('描述1'),
            'description_2' => $this->string()->comment('描述2'),
            'description_3' => $this->string()->comment('描述3'),
            'image' => $this->string()->comment('图片'),
            'status' => $this->tinyInteger(4)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
