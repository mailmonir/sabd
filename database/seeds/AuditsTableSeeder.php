<?php

use Illuminate\Database\Seeder;
use App\Audit;

class AuditsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sync_data = [1=>['base_price' => 10000, 'vat' => 1500, ], 2=>['base_price' => 15000, 'vat' => 1500, ], 3=>['base_price' => 20000, 'vat' => 1500, ], 4=>['base_price' => 25000, 'vat' => 1500, ], 5=>['base_price' => 30000, 'vat' => 1500, ], 6=>['base_price' => 35000, 'vat' => 1500, ], 7=>['base_price' => 40000, 'vat' => 1500, ], 8=>['base_price' => 45000, 'vat' => 1500, ]] ;
        $audit1 = new Audit();
        $audit1->audit_name = 'BSCI';
        $audit1->slug = 'bsci';
        $audit1->save();
        $audit1->auditors()->sync($sync_data);
        
        $sync_data = [1=>['base_price' => 10000, 'vat' => 1500, ], 2=>['base_price' => 15000, 'vat' => 1500, ], 3=>['base_price' => 20000, 'vat' => 1500, ], 4=>['base_price' => 25000, 'vat' => 1500, ], 5=>['base_price' => 30000, 'vat' => 1500, ], 6=>['base_price' => 35000, 'vat' => 1500, ], 7=>['base_price' => 40000, 'vat' => 1500, ], 8=>['base_price' => 45000, 'vat' => 1500, ]] ;
        $audit2 = new Audit();
        $audit2->audit_name = 'SEDEX';
        $audit2->slug = 'sedex';
        $audit2->save();
        $audit2->auditors()->sync($sync_data);
        
        $sync_data = [1=>['base_price' => 15000, 'vat' => 1500, ], 2=>['base_price' => 25000, 'vat' => 1500, ], 3=>['base_price' => 30000, 'vat' => 1500, ], 4=>['base_price' => 35000, 'vat' => 1500, ], 5=>['base_price' => 40000, 'vat' => 1500, ]] ;
        $audit3 = new Audit();
        $audit3->audit_name = 'WRAP';
        $audit3->slug = 'wrap';
        $audit3->save();
        $audit3->auditors()->sync($sync_data);
    }
}
