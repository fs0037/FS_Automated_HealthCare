<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tblpage')->insert([
            [
                'PageType' => 'aboutus',
                'PageTitle' => 'About Us',
                'PageDescription' => '<ul style="padding: 0px; margin-right: 0px; margin-bottom: 1.313em; margin-left: 1.655em;" times="" new="" roman";="" font-size:="" 14px;="" text-align:="" center;="" background-color:="" rgb(255,="" 246,="" 246);"=""><li style="text-align: left;"><font color="#000000"> </font></li><li style="text-align: left;"><font color="#000000"> The Hospital Management System (HMS) is designed for Any Hospital to replace their existing manual, paper based system. The new system is to control the following information; patient information, room availability, staff and operating room schedules, and patient invoices. These services are to be provided in an efficient, cost effective manner, with the goal of reducing the time and resources currently required for such tasks.A significant part of the operation of any hospital involves the acquisition, management and timely retrieval of great volumes of information. This information typically involves; patient personal information and medical history, staff information, room and ward scheduling, staff scheduling, operating theater scheduling and various facilities waiting lists. All of this information must be managed in an efficient and cost wise fashion so that an institution\'s resources may be effectively utilized HMS will automate the management of the hospital making it more efficient and error free. It aims at standardizing data, consolidating data ensuring data integrity and reducing inconsistencies.&nbsp;</font></li></ul>',
                'Email' => 'info@example.com',
                'MobileNumber' => '0123456789',
                'OpenningTime' => '24/7 Service',
                'Address' => 'Rajshahi, Bangladesh',
            ],
            [
                'PageType' => 'contactus',
                'PageTitle' => 'Contact Us',
                'PageDescription' => 'Feel free to contact us for any emergency...',
                'Email' => 'contact@example.com',
                'MobileNumber' => '0198765432',
                'OpenningTime' => '24/7 Service',
                'Address' => 'Rajshahi, Bangladesh',
            ]
        ]);
    }
}