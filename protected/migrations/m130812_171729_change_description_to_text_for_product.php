<?php

class m130812_171729_change_description_to_text_for_product extends CDbMigration
{
	public function up()
	{
		$this->alterColumn('product', 'description', 'text');
	}

	public function down()
	{
		$this->alterColumn('product', 'description', 'string');
	}
}