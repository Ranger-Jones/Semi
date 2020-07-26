<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $old_profiles = Profile::where('url', null)->get();
        Profile::where('url', null)->delete();
        foreach ($old_profiles as $profile) {
            $profile = factory(App\Profile::class)->create([
                'user_id' => $profile['user_id']
            ]);
            
        }
        

        
    }
}
