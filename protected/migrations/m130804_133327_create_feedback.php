<?php

class m130804_133327_create_feedback extends CDbMigration
{
	public function up()
	{

		$this->createTable('feedback', array(
			'id' => 'pk',
			'name' => 'string CHARACTER SET utf8 NOT NULL',
			'sex' => 'char(10)',
			'email' => 'string CHARACTER SET utf8 NOT NULL',
			'tel' => 'string CHARACTER SET utf8',
			'fax' => 'string CHARACTER SET utf8',
			'address' => 'string CHARACTER SET utf8',
			'title' => 'string CHARACTER SET utf8 NOT NULL',
			'content' => 'text CHARACTER SET utf8',
		));
	}

	public function down()
	{
		$this->dropTable('feedback');
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