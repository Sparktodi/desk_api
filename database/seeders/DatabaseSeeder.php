<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\Desk;
use App\Models\DeskList;
use App\Models\Task;
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
    //     DeskList::factory()->count(5)->create()->each(function (DeskList $deskList) {
        Task::factory()->count(10)->create();
    }
}
