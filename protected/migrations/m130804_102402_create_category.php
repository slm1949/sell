<?php

class m130804_102402_create_category extends CDbMigration
{
	public function up()
	{
		$this->createTable('category', array(
			'id' => 'pk',
			'name' => 'string CHARACTER SET utf8 NOT NULL',
			'parent_id' => 'int',
			'level' => 'int NOT NULL',
			'description' => 'string CHARACTER SET utf8',
		));
	}

	public function down()
	{
		$this->dropTable('category');
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