<?php
use Migrations\AbstractSeed;

/**
 * Roles seed.
 */
class RolesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
                    [
                        'name' => 'Staff Admin',
                        'label' => 'staffAdmin',
                        'status' => 1,
                        'created' => date('Y-m-d H:i:s'),
                        'modified'=> date('Y-m-d H:i:s')
                    ],
                    [
                        'name' => 'Staff Manager',
                        'label' => 'staffManager',
                        'status' => 1,
                        'created' => date('Y-m-d H:i:s'),
                        'modified'=> date('Y-m-d H:i:s')
                    ]
                ];

        $table = $this->table('roles');
        $table->insert($data)->save();
    }
}
