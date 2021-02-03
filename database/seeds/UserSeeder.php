<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $cooluserdataset = [
            [
                'name' => 'Elon Musk',
                'username' => 'ellen',
                'email' => 'ellen@gmail.com',
                'password' => Hash::make('password'),
                'inclass' => '9a',
                'subject' => 'Mathematik'

            ],
            [
                'name' => 'Nick Regber',
                'username' => 'blacklarry',
                'email' => 'blacklarry@gmail.com',
                'password' => Hash::make('password'),
                'inclass' => '7a',
                'subject' => 'Physik'

            ],
            [
                'name' => 'Sheldon Cooper',
                'username' => 'moonpie',
                'email' => 'moonpie@gmail.com',
                'password' => Hash::make('password'),
                'inclass' => '11a',
                'subject' => 'Chemie'

            ],
            [
                'name' => 'Donald Trump',
                'username' => 'trumpet',
                'email' => 'trumpet@gmail.com',
                'password' => Hash::make('password'),
                'inclass' => '8a',
                'subject' => 'Deutsch'

            ],
            [
                'name' => 'Jesus Pablo',
                'username' => 'pablo',
                'email' => 'pablo@gmail.com',
                'password' => Hash::make('password'),
                'inclass' => '11b',
                'subject' => 'Informatik'

            ],
            [
                'name' => 'Johannes Feige',
                'username' => 'das_vieh',
                'email' => 'das_vieh@gmail.com',
                'password' => Hash::make('password'),
                'inclass' => '7b',
                'subject' => 'Musik'

            ],
            [
                'name' => 'Robert James Fischer',
                'username' => 'bobby_chess_king',
                'email' => 'bobby_chess_king@gmail.com',
                'password' => Hash::make('password'),
                'inclass' => '11c',
                'subject' => 'Schach'

            ],
            [
                'name' => 'Spongebob Schwammkopf',
                'username' => '𝕤𝕡𝕠𝕟𝕘𝕖𝕓𝕠𝕓😠',
                'email' => '@gmail.com',
                'password' => Hash::make('password'),
                'inclass' => '',
                'subject' => ''

            ],
            [
                'name' => 'Marie Curie',
                'username' => 'curry_marie',
                'email' => 'curry_marie@gmail.com',
                'password' => Hash::make('password'),
                'inclass' => '',
                'subject' => ''

            ],
            [
                'name' => 'Nicolas Cage',
                'username' => 'nic',
                'email' => 'nic@gmail.com',
                'password' => Hash::make('password'),
                'inclass' => '10a',
                'subject' => 'Ethik'

            ],
            [
                'name' => 'Stephen Hawking',
                'username' => 'robotman',
                'email' => 'robotman@gmail.com',
                'password' => Hash::make('password'),
                'inclass' => '12a',
                'subject' => 'Physik'

            ],
        ];
        User::insert($cooluserdataset);*/
        $users = factory(App\User::class, 25)
           ->create()->each(function($u){
               $u->permissions()->save(factory(App\Permission::class)->make());
           });

        
        /*
        foreach ($profiles as $profile) {
            $u_profile = factory(App\Profile::class)->make([
                'user_id' => $profile['user_id']
            ]);
            Profile::where('id', $profile['id'])->update(array($u_profile));
        }*/
    }
}
