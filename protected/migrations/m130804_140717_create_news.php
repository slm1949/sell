<?php

class m130804_140717_create_news extends CDbMigration
{
	public function up()
	{
		$this->createTable('news', array(
			'id' => 'pk',
			'title' => 'string CHARACTER SET utf8 NOT NULL',
			'content' => 'text CHARACTER SET utf8 NOT NULL',
		));
	}

	public function down()
	{
		$this->dropTable('news');
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