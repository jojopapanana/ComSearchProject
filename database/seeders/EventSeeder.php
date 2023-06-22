<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            ['event_name' => '2023 BNEC Social Event', 
            'organizer' => 'Bina Nusantara English Club',
            'event_start_date' => '2023-7-29',
            'event_end_date' => '2023-8-5',
            'registration_start_date' => '2023-5-14',
            'registration_end_date' => '2023-7-28',
            'event_ig1' => 'bnecalamsutera',
            'event_description' => 'This event is a social event held by BNEC!',
            'group_link' => 'https://mybnec.org/',
            'poster' => 'bnec.png',
            'picture' => 'AUTOBIOGRAPHY.jpg'],

            ['event_name' => '2023 BNCC Social Event', 
            'organizer' => 'Bina Nusantara Computer Club',
            'event_start_date' => '2023-7-1',
            'event_end_date' => '2023-7-8',
            'registration_start_date' => '2023-5-28',
            'registration_end_date' => '2023-6-30',
            'event_ig1' => 'bnccalsut',
            'event_description' => 'This event is a social event held by BNCC!',
            'group_link' => 'https://bncc.net/',
            'poster' => 'bncc.png',
            'picture' => 'avatar.jpg'],

            ['event_name' => 'KMBD Social Event', 
            'organizer' => 'Keluarga Mahasiswa Buddhis Dhammavaddhana',
            'event_start_date' => '2023-7-10',
            'event_end_date' => '2023-7-17',
            'registration_start_date' => '2023-7-2',
            'registration_end_date' => '2023-7-9',
            'event_ig1' => 'kmbdalsut',
            'event_description' => 'This event is a social event held by KMBD!',
            'group_link' => 'https://www.kmbd.info/',
            'poster' => 'kmbd.jpg',
            'picture' => 'blackpanther.jpg'],

            ['event_name' => 'BPreneur Social Event', 
            'organizer' => 'Bina Nusantara Entreprenur Club',
            'event_start_date' => '2023-7-18',
            'event_end_date' => '2023-7-25',
            'registration_start_date' => '2023-7-10',
            'registration_end_date' => '2023-7-17',
            'event_ig1' => 'bpreneur',
            'event_description' => 'This event is a social event held by BPreneur!',
            'group_link' => 'https://student-activity.binus.ac.id/b-preneur/',
            'poster' => 'bpreneur.png',
            'picture' => 'iwdws.jpg'],

            ['event_name' => 'BNMC Social Event', 
            'organizer' => 'Bina Nusantara Mandarin Club',
            'event_start_date' => '2023-7-20',
            'event_end_date' => '2023-7-27',
            'registration_start_date' => '2023-7-13',
            'registration_end_date' => '2023-7-20',
            'event_ig1' => 'bnmcalamsutera',
            'event_description' => 'This event is a social event held by BNMC!',
            'group_link' => 'https://student-activity.binus.ac.id/bnmc/',
            'poster' => 'bnmc.jpg',
            'picture' => 'mindcage.jpg']
        ]);
    }
}
