<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade
use Illuminate\Support\Carbon; // Import Carbon for the now() function
use App\Models\Note;

class Noteseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notes')->insert([
            'title' => 'Sample Title',
            'label' => 'Sample Label',
            'subject' => 'Sample Subject',
            'date_creation' => Carbon::now(), // Use Carbon for now()
            'date_before_expiration' => Carbon::now(), // Use Carbon for now()
        ]);
    }
}
