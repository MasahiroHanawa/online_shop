<?php


use Phinx\Migration\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        // create the table
        $table = $this->table('users');
        $table->addColumn('name', 'string', 255)
            ->addColumn('email', 'string', 255)
            ->addColumn('password', 'string', 255)
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
        $this->dropTable('users');
    }
}
