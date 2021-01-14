<?php

namespace Modules\Contact\Database\Seeders;

use Modules\Contact\Entities\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ContactDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Contact::factory()->times(20)->create();
    }
}
