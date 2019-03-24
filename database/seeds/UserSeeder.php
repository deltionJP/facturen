<?php
use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class UserSeeder extends Seeder
{
    protected $superadmins = 
    [
        'jordiepasman@msml.nl'  => [
            'name' => 'Jordie Pasman',
        ],
    ];

    protected $admins = 
    [
        'kalverenpasman@kpnmail.nl.nl'  => [
            'name' => 'Kalveren Pasman',
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::updateOrCreate(['name' => 'admin']);
        foreach ($this->admins as $email => $admin) {
            $admin_name = explode(' ', $admin['name']);
            $admin_user = User::firstOrNew([
                'email' => $email,
            ], [
                'firstname' => $admin_name[0],
                'lastname'  => $admin_name[1],
            ]);
            if (is_null($admin_user->password)) {
                $admin_user->password = '$2y$12$cFCqqZJ4dFy7smEH65fHT.Uqxo9Kp5tohWsFHQfLeHa2ch0JZcIXS';
            }
            $admin_user->save();
            $admin_user->assignRole($admin_role);
        }

        $super_admin = Role::updateOrCreate(['name' => 'superadmin']);
        foreach ($this->superadmins as $email => $superadmin) {
            $super_admin_name = explode(' ', $superadmin['name']);
            $user = User::firstOrNew([
                'email' => $email,
            ], [
                'firstname' => $super_admin_name[0],
                'lastname'  => $super_admin_name[1],
            ]);
            if (is_null($user->password)) {
                $user->password = '$2y$12$cFCqqZJ4dFy7smEH65fHT.Uqxo9Kp5tohWsFHQfLeHa2ch0JZcIXS';
            }
            $user->save();
            $user->assignRole($super_admin);
        }
    }
}