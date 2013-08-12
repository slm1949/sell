<?php

class m130812_173159_add_created_at_to_feedback extends CDbMigration
{
	public function up()
	{
		$this->addColumn('feedback', 'created_at', 'datetime');
	}

	public function down()
	{
		$this->dropColumn('feedback', 'created_at', 'datetime');
	}
}