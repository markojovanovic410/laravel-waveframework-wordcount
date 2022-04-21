<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('plans')->delete();

        \DB::table('plans')->insert(array(
            0 => array(
                'id' => 1,
                'name' => 'Trial',
                'slug' => 'basic',
                'description' => 'Start 7 days trial',
                'features' => 'Basic Feature Example 1, Basic Feature Example 2, Basic Feature Example 3, Basic Feature Example 4',
                'plan_id' => '1',
                'role_id' => 3,
                'default' => 0,
                'price' => '0',
                'trial_days' => 0,
                'created_at' => '2018-07-03 05:03:56',
                'updated_at' => '2018-07-03 17:17:24',
                'duration' => 'trial',
            ),
            1 => array(
                'id' => 2,
                'name' => 'Month',
                'slug' => 'premium',
                'description' => 'Signup for our premium plan to access all our Premium Features.',
                'features' => 'Premium Feature Example 1, Premium Feature Example 2, Premium Feature Example 3, Premium Feature Example 4',
                'plan_id' => '2',
                'role_id' => 5,
                'default' => 1,
                'price' => '100',
                'trial_days' => 0,
                'created_at' => '2018-07-03 16:29:46',
                'updated_at' => '2018-07-03 17:17:08',
                'duration' => 'monthly',
            ),
            2 => array(
                'id' => 3,
                'name' => 'Annual',
                'slug' => 'pro',
                'description' => 'Gain access to our pro features with the pro plan.',
                'features' => 'Pro Feature Example 1, Pro Feature Example 2, Pro Feature Example 3, Pro Feature Example 4',
                'plan_id' => '3',
                'role_id' => 4,
                'default' => 0,
                'price' => '1000',
                'trial_days' => 14,
                'created_at' => '2018-07-03 16:30:43',
                'updated_at' => '2018-08-22 22:26:19',
                'duration' => 'annual',
            ),
        ));

    }
}
