<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Writer::create(['name' => 'Raka Putra Wicaksono', 'specialty' => 'Spesialis Interactive Multimedia']); 
        Writer::create(['name' => 'Bia Mecca Annisa', 'specialty' => 'Spesialis Software Engineering']);
        Writer::create(['name' => 'Abi Firmansyah', 'specialty' => 'Spesialis Software Engineering']); 
    }
}
