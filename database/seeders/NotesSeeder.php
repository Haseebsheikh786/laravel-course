<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Note;
use Illuminate\Support\Facades\DB;

class NotesSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data to start fresh (optional)
        Note::truncate();

        // Define dummy data
        $dummyNotes = [
            [
                'note' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'user_id' => 1,
            ],
            [
                'note' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
                'user_id' => 1,
            ],
            [
                'note' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'user_id' => 1,
            ],
        ];

        // Insert dummy data using Eloquent
        foreach ($dummyNotes as $note) {
            Note::create($note);
        }

        // Alternatively, you can use DB facade for raw SQL inserts
        // foreach ($dummyNotes as $note) {
        //     DB::table('notes')->insert($note);
        // }
    }
}
