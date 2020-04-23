<?php

use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quotes')->insert([
            'description' => 'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.',
        ]);
        DB::table('quotes')->insert([
            'description' => 'Antea meum quid tributus Mario que ille immortalibus pertinerent quindecim dignitatem Supplicationem reprehendant maximis cum est dignitatem ille dierum.',
        ]);
        DB::table('quotes')->insert([
            'description' => 'Tempore vacua vacua perpetuae habere nobis oportere quis pacis suspicione ab Patres sic sic omni oportere decernendis rationem conscripti omnia.',
        ]);
        DB::table('quotes')->insert([
            'description' => 'Quoque lucratus aliquotiens nec autem septem perfusorumque eius vetitis obscurum indicium diritatis pugilum ingentia perfusorumque septem quod delectabatur certaminibus concidentium.',
        ]);
        DB::table('quotes')->insert([
            'description' => 'Convictus caput cunctum ei ut iure reus reus expresse suffragatione maiestatis quo expresse postulatus caput populatam ex vetitis suum potuit.',
        ]);
    }
}
