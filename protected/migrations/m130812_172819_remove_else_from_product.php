<?php

class m130812_172819_remove_else_from_product extends CDbMigration
{
	public function up()
	{
		$this->dropColumn('product', 'else');
	}

	public function down()
	{
		$this->addColumn('product', 'else', 'string');
	}
}