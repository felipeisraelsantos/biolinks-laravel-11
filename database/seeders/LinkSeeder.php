<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::all()
            ->each(function (User $user) {
                foreach (range(1, random_int(5, 8)) as $sort) {
                    Link::factory()->create([
                        'user_id' => $user->id,
                        'sort' => $sort
                    ]);
                }
            });
    }
}
