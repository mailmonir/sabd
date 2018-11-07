<?php

use Illuminate\Database\Seeder;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Info::create([
            'company_name' => 'Social Audit BD.Com',
            'address_line1' => '35 Garib E Newaz Avenue',
            'address_line2' => 'Sector-13, Uttara',
            'city' => 'Dhaka',
            'post_code' => '1230',
            'country' => 'Bangladesh',
            'logo' => 'public/img/default/logos/logo.png',
            'contact_person' => 'Nargish Nahar',
            'phone' => '+8801711388779',
            'email' => 'info@socialauditbd.com',
            'bank_name' => 'Exim Bank',
            'account_no' => '06711100132824',
            'beneficiary' => 'Social Audit BD.Com',
            'bank_address_line1' => 'Garib E Newaj Avenue',
            'bank_address_line2' => 'Uttara, Dhaka, Bangladesh',
            'swift_code' => 'EXBKBDDH',
            'payment_method' => 'Cheque, Payorder',
            'notes' => 'This is a computer generated invoice therefore, signature is not required.',
            'conversion_rate' => 8327,
            'discount' => 500,
        ]);
    }
}
