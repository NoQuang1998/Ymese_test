<?php

use App\Ymesetbl;
use Illuminate\Database\Seeder;

class ymeseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Feb 2020 issue',
                'created_date' => now(),
                'download_link' => 'feb-2020-issue'
            ],
            [
                'name' => 'Jan 2020 issue',
                'created_date' => now(),
                'download_link' => 'jan-2020-issue'
            ],
            [
                'name' => 'Feb 2020 issue',
                'created_date' => now(),
                'download_link' => 'feb-2020-issue'
            ],
            [
                'name' => 'Feb 2020 issue',
                'created_date' => now(),
                'download_link' => 'feb-2020-issue'
            ],
            [
                'name' => 'Feb 2016 issue',
                'created_date' => now(),
                'download_link' => 'feb-2016-issue'
            ],
            [
                'name' => 'Feb 2015 issue',
                'created_date' => now(),
                'download_link' => 'feb-2015-issue'
            ],
            [
                'name' => 'Feb 2021 issue',
                'created_date' => now(),
                'download_link' => 'feb-2021-issue'
            ],
            [
                'name' => 'Feb 2022 issue',
                'created_date' => now(),
                'download_link' => 'feb-2022-issue'
            ]
        ];
        Ymesetbl::insert($data);
    }
}
