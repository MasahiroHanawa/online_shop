<?php


use Phinx\Migration\AbstractMigration;

class CreateColors extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        // create the table
        $table = $this->table('colors');
        $table->addColumn('code', 'string', 255)
            ->addColumn('name', 'string', 255)
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime', ['null' => true])
            ->addColumn('deleted_at', 'datetime', ['null' => true])
            ->create();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('colors');
    }
}
