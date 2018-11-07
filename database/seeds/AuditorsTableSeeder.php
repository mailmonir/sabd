<?php

use Illuminate\Database\Seeder;
use App\Auditor;

class AuditorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $auditor = new Auditor();
        $auditor->fname = 'CP';
        $auditor->lname = 'ALGI';
        $auditor->company = 'ALGI';
        $auditor->designation = 'Not Known';
        $auditor->phone = '+880 (2) 5895 5601';
        $auditor->gender = 1;
        $auditor->address = 'Suite 7, House 35 Garib-E-Newaz Avenue, Sector-13, Uttara 1230 Uttara Dhaka Bangladesh';
        $auditor->agree = 1;
        $auditor->slug = str_slug($auditor->fname . ' ' . $auditor->lname);
        $auditor->email = 'mailmonir@gmail.com';
        $auditor->password = bcrypt('pushpita');
        $auditor->avatar = 'public/img/default/avatars/male.jpg';
        $auditor->save();
        
        $auditor = new Auditor();
        $auditor->fname = 'CP';
        $auditor->lname = 'BV';
        $auditor->company = 'Bureau Veritas';
        $auditor->designation = 'Not Known';
        $auditor->phone = '88-02-(880-2) 988 5362, 883 6020, 883 6122, 882 6742';
        $auditor->gender = 1;
        $auditor->address = 'Tani Villa Road # 23, House # 94, Block # A, Banani R/A 1213 Dhaka Bangladesh';
        $auditor->agree = 1;
        $auditor->slug = str_slug($auditor->fname . ' ' . $auditor->lname);
        $auditor->email = 'bahlul.dana@bd.bureauveritas.com';
        $auditor->password = bcrypt('pushpita');
        $auditor->avatar = 'public/img/default/avatars/male.jpg';
        $auditor->save();
        
        $auditor = new Auditor();
        $auditor->fname = 'CP';
        $auditor->lname = 'ELEVATE';
        $auditor->company = 'ELEVATE';
        $auditor->designation = 'Not Known';
        $auditor->phone = '88-02-(880-2) 988 5362, 883 6020, 883 6122, 882 6742';
        $auditor->gender = 1;
        $auditor->address = 'DOM-INNO House, 6th Floor, House # 13 Road # 07, Block – F, Banani Dhaka Bangladesh';
        $auditor->agree = 1;
        $auditor->slug = str_slug($auditor->fname . ' ' . $auditor->lname);
        $auditor->email = 'mamunzaman@elevatelimited.com';
        $auditor->password = bcrypt('pushpita');
        $auditor->avatar = 'public/img/default/avatars/male.jpg';
        $auditor->save();
        
        $auditor = new Auditor();
        $auditor->fname = 'CP';
        $auditor->lname = 'Intertek';
        $auditor->company = 'Intertek';
        $auditor->designation = 'Not Known';
        $auditor->phone = '88-02-(880-2) 988 5362, 883 6020, 883 6122, 882 6742';
        $auditor->gender = 1;
        $auditor->address = 'ntertek House Bangladesh Phoenix Tower, (2nd 407), Tejgaon I/A1215 Dhaka Banglades';
        $auditor->agree = 1;
        $auditor->slug = str_slug($auditor->fname . ' ' . $auditor->lname);
        $auditor->email = 'anis.zaman@intertek.com';
        $auditor->password = bcrypt('pushpita');
        $auditor->avatar = 'public/img/default/avatars/male.jpg';
        $auditor->save();
        
        $auditor = new Auditor();
        $auditor->fname = 'CP';
        $auditor->lname = 'SGS';
        $auditor->company = 'SGS';
        $auditor->designation = 'Not Known';
        $auditor->phone = '+88 02 986 2740';
        $auditor->gender = 1;
        $auditor->address = 'SGS Bangladesh Limited House No. 37, Road No. 24, Gulshan-1 1212 Dhaka Bangladesh';
        $auditor->agree = 1;
        $auditor->slug = str_slug($auditor->fname . ' ' . $auditor->lname);
        $auditor->email = 'Shafiul.Hassan@sgs.com';
        $auditor->password = bcrypt('pushpita');
        $auditor->avatar = 'public/img/default/avatars/male.jpg';
        $auditor->save();
        
        $auditor = new Auditor();
        $auditor->fname = 'CP';
        $auditor->lname = 'TÜV Rheinland';
        $auditor->company = 'TÜV Rheinland';
        $auditor->designation = 'Not Known';
        $auditor->phone = '+88-02-9894904';
        $auditor->gender = 1;
        $auditor->address = 'TÜV Rheinland (Bangladesh) Pvt. Ltd. Alauddin Tower (5th - 8th Floor) Plot#17, Road#113/A, 1212 Gulshan Dhaka Bangladesh';
        $auditor->agree = 1;
        $auditor->slug = str_slug($auditor->fname . ' ' . $auditor->lname);
        $auditor->email = 'Fatema.Jahan@bd.tuv.com';
        $auditor->password = bcrypt('pushpita');
        $auditor->avatar = 'public/img/default/avatars/female.jpg';
        $auditor->save();
        
        $auditor = new Auditor();
        $auditor->fname = 'CP';
        $auditor->lname = 'TÜV SÜD';
        $auditor->company = 'TÜV SÜD';
        $auditor->designation = 'Not Known';
        $auditor->phone = '+ 88-02-58954115, 58954120; 58956724';
        $auditor->gender = 1;
        $auditor->address = 'TÜV SÜD Bangladesh (Pvt.) Limited Level 7,8 &14) Update Tower, 01 Shajalal Avenue, Sector -06, Uttara Model Town, Dhaka 1230 Bangladesh';
        $auditor->agree = 1;
        $auditor->slug = str_slug($auditor->fname . ' ' . $auditor->lname);
        $auditor->email = 'Asim.Mondal@tuv-sud.com.bd';
        $auditor->password = bcrypt('pushpita');
        $auditor->avatar = 'public/img/default/avatars/male.jpg';
        $auditor->save();
        
        $auditor = new Auditor();
        $auditor->fname = 'CP';
        $auditor->lname = 'UL VS Limited';
        $auditor->company = 'UL VS Limited';
        $auditor->designation = 'Not Known';
        $auditor->phone = '+ 88 01730703507';
        $auditor->gender = 1;
        $auditor->address = 'UL - Responsible Sourcing Natore Tower (7th) Plot 32D 1230 Uttara, DhakaBangladesh';
        $auditor->agree = 1;
        $auditor->slug = str_slug($auditor->fname . ' ' . $auditor->lname);
        $auditor->email = 'Habib.Hasan@ul.com';
        $auditor->password = bcrypt('pushpita');
        $auditor->avatar = 'public/img/default/avatars/male.jpg';
        $auditor->save();
    }
}
