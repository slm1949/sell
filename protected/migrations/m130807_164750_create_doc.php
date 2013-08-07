<?php

class m130807_164750_create_doc extends CDbMigration
{
	public function up()
	{
		$this->createTable('doc', array(
			'id' => 'pk',
			'key' => 'string',
			'title' => 'string',
			'content' => 'text',
			'created_at' => 'datetime',
			'updated_at' => 'datetime',
		));
	}

	public function down()
	{
		$this->dropTable('doc');
	}
}