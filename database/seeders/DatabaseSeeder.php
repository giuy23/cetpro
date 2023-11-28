<?php
namespace Database\Seeders;

use App\Models\Marketing;
use Illuminate\Support\Facades\DB;
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
        $this->call([
            UsersTableSeeder::class,
            CetproSeeder::class,
            MarketingSeeder::class,
            ProgramaSeeder::class,
            CursoSeeder::class,
            AlumnoSeeder::class
        ]);
    }
}
