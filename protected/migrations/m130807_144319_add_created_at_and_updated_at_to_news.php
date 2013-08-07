<?php

class m130807_144319_add_created_at_and_updated_at_to_news extends CDbMigration
{
	public function up()
	{
		$this->addColumn('news', 'created_at', 'datetime');
		$this->addColumn('news', 'updated_at', 'datetime');
	}

	public function down()
	{
		$this->dropColumn('news', 'created_at', 'datetime');
		$this->dropColumn('news', 'updated_at', 'datetime');
	}
}