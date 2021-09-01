<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Pesan;
class PesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Pesan::factory()->count(17)->create();
        Post::all()->each(function(Post $post) {
            $pesan = \App\Models\Pesan::factory()->make(); 
            $pesanan = collect([$pesan]);

            for($i = 0; $i < random_int(1,20); $i++) {
                $from = (clone $pesan -> to)->addDays(random_int(1,14));
                $to = (clone $from ) -> addDays(random_int(0,14));

                $pesan = Pesan::make([
                    'from' => $from,
                    'to' => $to
                ]);

                $pesanan-> push($pesan);
            }
            $post->pesanan()->saveMany($pesanan);
        });
    }
}
