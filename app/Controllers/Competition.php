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
            'contacts' => [
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

    public function ui_ux()
    {
        $data = [
            'title' => 'UI/UX Design',
            'heading' => "UI/UX <br> Design",
            'img' => 'logo-ui.png',
            'desc' => 'The UI/UX Design Competition is a competition that competes on how to make a good and comfortable interface design. The main focus of this competition is to create an interface design for an application or web product that is effective, efficient, and can provide comfort for users when using the application as a whole. The purpose of holding this competition is to accommodate students who have an interest in the UI/UX field.',
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
                    'heading' => 'Pengumpulan Desain',
                    'date' => '11 September 2021',
                    'full_date' => '11 September 2021 – 10 October 2021',
                    'desc' => 'Competitive Programming is a problem solving competition to solve problems
                        with computer programming. This competition aims to improve problem solving
                        skills, programming skills, and lateral thinking skills.'
                ],
                [
                    'heading' => 'Pengumuman Finalis',
                    'date' => '17 October 2021',
                    'full_date' => '17 October 2021',
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
                    'heading' => 'Presentasi Final & Pengumuman pemenang',
                    'date' => '24 October 2021',
                    'full_date' => '24 October 2021',
                    'desc' => 'Competitive Programming is a problem solving competition to solve problems
                        with computer programming. This competition aims to improve problem solving
                        skills, programming skills, and lateral thinking skills.'
                ]
            ],
            'contacts' => [
                [
                    'name' => 'M. Bintang Kadafi',
                    'whatsapp' => '082279648590',
                    'line' => '-'
                ],
                [
                    'name' => 'M. Noufal Rifqi',
                    'whatsapp' => '089627508655',
                    'line' => '-'
                ]
            ],
            'footer_top' => '100vh'
        ];
        return view('pages/CompetitionTemplate', $data);
    }

    public function photo()
    {
        $data = [
            'title' => 'Photography',
            'heading' => "Photography",
            'img' => 'logo-photo.png',
            'desc' => 'Photography Competition is a wonderful way to improve your photography skill.
                        A competition can help you raise the bar as a photographer as you know your
                        image will be seen by a discerning group of judges and possibly even displayed
                        along with other winners. And yaa, as you know… photographs are used to tell
                        stories in many different ways. Everyone has a story, and this event, SRIFOTON
                        2021, make it possible for more and more people to share their story with others.
                        Good Luck!',
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
                    'heading' => 'Pengumpulan Karya',
                    'date' => '11 September 2021',
                    'full_date' => '11 September 2021 – 23 October 2021',
                    'desc' => 'Competitive Programming is a problem solving competition to solve problems
                        with computer programming. This competition aims to improve problem solving
                        skills, programming skills, and lateral thinking skills.'
                ],
                [
                    'heading' => 'Penilaian / Penjurian',
                    'date' => '24 October 2021',
                    'full_date' => '24 October 2021',
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
                ],
            ],
            'contacts' => [
                [
                    'name' => 'Jerrel Hutahaean',
                    'whatsapp' => '0812-6205-9002',
                    'line' => '-'
                ],
                [
                    'name' => 'M. Noufal Rifqi',
                    'whatsapp' => '0822-6900-0354',
                    'line' => '-'
                ]
            ],
            'footer_top' => '100vh'
        ];
        return view('pages/CompetitionTemplate', $data);
    }
}
