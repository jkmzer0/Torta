<?php

use Phinx\Migration\AbstractMigration;
use Cake\Auth\DefaultPasswordHasher;
class CreateUsersSeedMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
     public function up()
    {  
        $faker=\Faker\Factory::create();
        $populator=new Faker\ORM\CakePHP\Populator($faker);
        $populator->addEntity('Users', 1, [
            'username'=>'jkmzer0',
            'password'=>function()
            {
                $hasher=new DefaultPasswordHasher();
                return $hasher->hash('1234');
            },
            'email'=>'jkmzer0@gmail.com',
            'id_persona'=>7,
            'role'=>2
        ]);
        $populator->execute();
    }
}
