<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::insert([
            [
                'nama' => "A Business Proposal",
                'episode' => 12,
                'durasi' => 60,
                'sutradara' => "Pak Sun-Ho",
                'genre' => "Romance",
                'tahun_rilis' => "2022",
                'rating' => 10,
            ],
            [
                'nama' => "Twenty-Five Twenty-one",
                'episode' => 16,
                'durasi' => 70,
                'sutradara' => "Jung Ji-hyun",
                'genre' => "Komedi",
                'tahun_rilis' => "2022",
                'rating' => 8,
            ],
            [
                'nama' => "Romance is a Bonus Book",
                'episode' => 16,
                'durasi' => 60,
                'sutradara' => "Lee Jeong-hyo",
                'genre' => "Romance",
                'tahun_rilis' => "2019",
                'rating' => 5,
            ],
            [
                'nama' => "Goedam",
                'episode' => 8,
                'durasi' => 60,
                'sutradara' => "Hong Won Ki",
                'genre' => "Horor",
                'tahun_rilis' => "2020",
                'rating' => 5.7,
            ],
            [
                'nama' => "Hellbound",
                'episode' => 6,
                'durasi' => 60,
                'sutradara' => "Yeon Sang-Ho",
                'genre' => "Horor",
                'tahun_rilis' => "2021",
                'rating' => 6,
            ],
            [
                'nama' => "My Love From The Star",
                'episode' => 16,
                'durasi' => 60,
                'sutradara' => "Jang Tae Yoo",
                'genre' => "Romantis",
                'tahun_rilis' => "2013",
                'rating' => 8.2,
            ],
            [
                'nama' => "Moon Lovers",
                'episode' => 20,
                'durasi' => 60,
                'sutradara' => "Kim Kyu-tae",
                'genre' => "Romantis",
                'tahun_rilis' => "2016",
                'rating' => 9,
            ],
            [
                'nama' => "Hotel Del Luna",
                'episode' => 16,
                'durasi' => 60,
                'sutradara' => "Oh Choong Hwan",
                'genre' => "Horor",
                'tahun_rilis' => "2019",
                'rating' => 8,
            ],
            [
                'nama' => "Mr.Queen",
                'episode' => 20,
                'durasi' => 60,
                'sutradara' => "Yoon Sung-sik",
                'genre' => "Fantasi",
                'tahun_rilis' => "2020",
                'rating' => 10,
            ],
            [
                'nama' => "Unlocked",
                'episode' => 1,
                'durasi' => 120,
                'sutradara' => "Kim Tae-joon",
                'genre' => "Dokumenter",
                'tahun_rilis' => "2023",
                'rating' => 4,
            ],
        ]);
    }
}
