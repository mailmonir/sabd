<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->fname = 'Monirul';
        $admin->lname = 'Islam';
        $admin->designation = 'Manager';
        $admin->phone = '+8801749277075';
        $admin->gender = 1;
        $admin->address = 'H-69, R-14, Sector-11, Uttara, Dhaka-1230';
        $admin->agree = 1;
        $admin->slug = str_slug($admin->fname . ' ' . $admin->lname);
        $admin->email = 'mailmonir@gmail.com';
        $admin->password = bcrypt('pushpita');
        $admin->avatar = 'public/img/default/avatars/male.jpg';
        $admin->save();
    }
}
