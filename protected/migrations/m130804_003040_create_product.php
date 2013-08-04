<?php

class m130804_003040_create_product extends CDbMigration
{
	public function up()
	{
		$this->createTable('product', array(
			'id' => 'pk',
			'name' => 'string CHARACTER SET utf8 NOT NULL',
			'model' => 'string CHARACTER SET utf8 NOT NULL',
			'category_id' => 'int NOT NULL',
			'description' => 'string CHARACTER SET utf8',
			'image' =>'string CHARACTER SET utf8',
			'else' =>'string CHARACTER SET utf8',
		));
	}

	public function down()
	{
		$this->dropTable('product');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}