<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alerteur;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CountryStateCityTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CollectionSeeder::class);
        $this->call(AlerteurSeeder::class);
        $this->call(RecommandationEnqueteSeeder::class);
        $this->call(EnqueteSeeder::class);
        $this->call(CategorieSanctionSeeder::class);
        $this->call(EmployeurSeeder::class);
        $this->call(MotifSanctionSeeder::class);
        $this->call(TypeSanctionSeeder::class);
        $this->call(PlainteSeeder::class);
        $this->call(SanctionSeeder::class);

    }
}
