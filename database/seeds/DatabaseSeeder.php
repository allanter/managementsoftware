<?php

use App\Users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call('UsersTableSeeder');
    }
}
// run 'composer dump-autoload' first, then run '$ php artisan db:seed'