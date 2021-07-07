<?php

namespace App\Controllers;

class Competition extends BaseController
{
    public function cp()
    {
        $data = [
            'title' => 'Competitive Programming',
            'heading' => "Competitive <br> Programming",
            'img' => 'logo-cp.png',
            'desc' => 'Competitive Programming is a problem solving competition to solve problems
                        with computer programming. This competition aims to improve problem solving
                        skills, programming skills, and lateral thinking skills. It also gives you experience
                        for working in software engineer related fields. And lastly it improves logical
                        thinking skills by creating an algorithm to solve problems that we give.',
            'timelines' => [
                [
                    'heading' => 'Pendaftaran Gelombang Pertama',
                    'date' => '25 July 2021',
                    'full_date' => '25 July 2021 - 20 August 2021',
                    'desc' => 'Competitive Programming is a problem solving competition to solve problems
                        with computer programming. This competition aims to improve problem solving
                        skills, programming skills, and lateral thinking skills.'

                ],
                [
                    'heading' => 'Pendaftaran Gelombang Kedua',
                    'date' => '25 August 2021',
                    'full_date' => '25 August 2021 - 11 September 2021',
                    'desc' => 'Competitive Programming is a problem solving competition to solve problems
                        with computer programming. This competition aims to improve problem solving
                        skills, programming skills, and lateral thinking skills.'
                ],
                [
                    'heading' => 'Babak Pemanasan',
                    'date' => '9 October 2021',
                    'full_date' => '9 October 2021',
                    'desc' => 'Competitive Programming is a problem solving competition to solve problems
                        with computer programming. This competition aims to improve problem solving
                        skills, programming skills, and lateral thinking skills.'
                ],
                [
                    'heading' => 'Babak Penyisihan',
                    'date' => '16 October 2021',
                    'full_date' => '16 October 2021',
                    'desc' => 'Competitive Programming is a problem solving competition to solve problems
                        with computer programming. This competition aims to improve problem solving
                        skills, programming skills, and lateral thinking skills.'
                ],
                [
                    'heading' => 'Pengumuman Finalis',
                    'date' => '18 October 2021',
                    'full_date' => '18 October 2021',
                    'desc' => 'Competitive Programming is a problem solving competition to solve problems
                        with computer programming. This competition aims to improve problem solving
                        skills, programming skills, and lateral thinking skills.'
                ],
                [
                    'heading' => 'Babak Final',
                    'date' => '23 October 2021',
                    'full_date' => '23 October 2021',
                    'desc' => 'Competitive Programming is a problem solving competition to solve problems
                        with computer programming. This competition aims to improve problem solving
                        skills, programming skills, and lateral thinking skills.'
                ],
                [
                    'heading' => 'Pengumuman Pemenang',
                    'date' => '30 October 2021',
                    'full_date' => '30 October 2021',
                    'desc' => 'Competitive Programming is a problem solving competition to solve problems
                        with computer programming. This competition aims to improve problem solving
                        skills, programming skills, and lateral thinking skills.'
                ]
            ],
            'contact' => [
                [
                    'name' => 'Tarisa Rafika',
                    'whatsapp' => '089621378572',
                    'line' => 'Tariraff'
                ],
                [
                    'name' => 'Alvian Khairi',
                    'whatsapp' => '085367141316',
                    'line' => 'alviankhairi2019'
                ]
            ],
            'footer_top' => '100vh'
        ];
        return view('pages/CompetitionTemplate', $data);
    }
}
