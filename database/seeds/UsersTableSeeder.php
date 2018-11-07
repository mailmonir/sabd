c<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return     avoid   
     */
    public function run()
    {
        $user = new User();
        $user->fname = 'Amirul';
        $user->lname = 'Islam';
        $user->company = 'Loopdot Fashion Ltd';
        $user->designation = 'Chairman';
        $user->phone = '+8801711374160';
        $user->gender = 1;
        $user->address = 'H-62, R-13, Sector-13, Uttara, Dhaka-1230';
        $user->agree = 1;
        $user->slug = str_slug($user->company);
        $user->email = 'amiruldhaka@gmail.com';
        $user->password = bcrypt('pushpita');
        $user->avatar = 'public/img/default/avatars/male.jpg';
        $user->workers = 1000;
        $user->location_id = 1;
        $user->save();
        
        $user = new User();
        $user->fname = 'Pushpita';
        $user->lname = 'Islam';
        $user->company = 'Some Future Company';
        $user->designation = 'Not Known';
        $user->phone = '+8801711390360';
        $user->gender = 0;
        $user->address = 'H-62, R-13, Sector-13, Uttara, Dhaka-1230';
        $user->agree = 1;
        $user->slug = str_slug($user->company);
        $user->email = 'pushpitaislam2008@gmail.com';
        $user->password = bcrypt('pushpita');
        $user->avatar = 'public/img/default/avatars/female.jpg';
        $user->workers = 2000;
        $user->location_id = 2;
        $user->save();
    }
}
