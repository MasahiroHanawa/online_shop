<?php


use Phinx\Migration\AbstractMigration;

class CreateProducts extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        // create the table
        $table = $this->table('products');
        $table->addColumn('gross_price', 'integer')
            ->addColumn('net_price', 'integer')
            ->addColumn('images_m', 'string', 255)
            ->addColumn('images_s', 'string', 255)
            ->addColumn('product_name', 'string', 255)
            ->addColumn('color_id', 'integer')
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
        $this->dropTable('products');
    }
}
