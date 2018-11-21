<?php

use App\Category;
use App\Product;
use App\Transaction;
use App\User;
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
        // $this->call(UsersTableSeeder::class);
        $categories = factory(Category::class)->times(10)->create();

        $users = factory(User::class)->times(20)->create();
        $userIds = User::all()->pluck('id')->toArray();

        $products = factory(Product::class)->times(40)->create();

        $transactions = factory(Transaction::class)->times(10)->create();


    }
}
