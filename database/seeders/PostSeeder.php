<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Categories;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $body = '    <p>The European languages are members of the same family. Their separate existence is a myth. For science, music,
        sport, etc, Europe uses the same&nbsp;<a
            href="">vocabulary</a>. The languages only differ in
        their grammar, their pronunciation and their most common words.</p>
    <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To
        achieve this, it&nbsp;<mark>would be</mark>&nbsp;necessary to have uniform grammar, pronunciation and more
        common words.</p>
    <figure class="wp-block-image size-large"><img decoding="async" width="1024" height="683"
            src="https://themeger.shop/wordpress/katen/wp-content/uploads/2022/08/kaizen-nguy-n-1066357-unsplash-1024x683.jpg"
            alt="" class="wp-image-11"
            srcset=""
            sizes="(max-width: 1024px) 100vw, 1024px">
        <figcaption>A caption for the above image.</figcaption>
    </figure>
    <p>The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes
        why a new common language would be desirable.</p>
    <div class="wp-block-image is-style-default">
        <figure class="alignleft size-full"><img decoding="async" loading="lazy" width="296" height="294"
                src="https://themeger.shop/wordpress/katen/wp-content/uploads/2022/08/single-sm-1.jpg" alt=""
                class="wp-image-12"
                srcset=""
                sizes="(max-width: 296px) 100vw, 296px"></figure>
    </div>
    <p>One could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar,
        pronunciation and more common words.</p>
    <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the
        individual languages. The new common language will be more simple and regular than the existing&nbsp;<a
            href="">European languages</a>. It will be as simple
        as Occidental; in fact, it will be Occidental.</p>
    <p>A collection of textile samples lay spread out on the table – Samsa was a travelling salesman – and above it
        there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.
    </p>
    <h3 class="wp-block-heading">Pityful a rethoric question ran over her cheek</h3>
    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day
        however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and
        devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into
        the belt and made herself on the way.</p>
    <p>I am so happy, my dear friend, so absorbed in the <em>exquisite sense</em> of mere tranquil existence, that I
        neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that
        I never was a greater artist than now.</p>
    <figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-1 is-layout-flex">
        <figure class="wp-block-image size-full"><img decoding="async" data-id="38"
                src="https://themeger.shop/wordpress/katen/wp-content/uploads/2022/08/post-md-10.jpg" alt=""
                class="wp-image-38"></figure>
        <figure class="wp-block-image size-full"><img decoding="async" data-id="26"
                src="https://themeger.shop/wordpress/katen/wp-content/uploads/2022/08/post-lg-1.jpg" alt=""
                class="wp-image-26"></figure>
    </figure>
    <h3 class="wp-block-heading">Conclusion</h3>
    <ul>
        <li>How about if I sleep a little bit</li>
        <li>A collection of textile samples lay spread out</li>
        <li>His many legs, pitifully thin compared with</li>
        <li>He lay on his armour-like back</li>
        <li>Gregor Samsa woke from troubled dreams</li>
    </ul>
    <p>To an English person, it will seem like simplified&nbsp;<a
            href="">English</a>, as a skeptical Cambridge friend
        of mine told me what Occidental is. The European languages are members of the same family. Their separate
        existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>';


        DB::table('posts')->insert([
            ['title' =>  'Master The Art Of Nature With These 7 Tips',
            'slug' => fake()->slug(),
            'body' => $body,
            'premium' => false,
            'published' => true,
            'photo' => 'images/3.jpg',
            'admin_id' => Admin::all()->random()->id,
            'categorie_id' => Categories::all()->random()->id,
            'created_at' => fake()->dateTimeBetween($startDate = '-10 years', $endDate = '-5 years', $timezone = null)

            ],[
            'title' =>  'Facts About Business That Will Help You Success',
            'slug' => fake()->slug(),
            'body' => $body,
            'premium' => false,
            'published' => true,
            'photo' => 'images/4.jpg',
            'admin_id' => Admin::all()->random()->id,
            'categorie_id' => Categories::all()->random()->id,
            'created_at' => fake()->dateTimeBetween($startDate = '-2 years', $endDate = '5 years', $timezone = null)

        ],[
            'title' =>  '60 Things To Immediately Do About Building',
            'slug' => fake()->slug(),
            'body' => $body,
            'premium' => false,
            'published' => true,
            'photo' => 'images/6.jpg',
            'admin_id' => Admin::all()->random()->id,
            'categorie_id' => Categories::all()->random()->id,
            'created_at' => fake()->dateTimeBetween($startDate = '-36 years', $endDate = '-5 years', $timezone = null)

        ],[
            'title' =>  'Your Light Is About To Stop Being Relevant',
            'slug' => fake()->slug(),
            'body' => $body,
            'premium' => false,
            'published' => true,
            'photo' => 'images/2.jpg',
            'admin_id' => Admin::all()->random()->id,
            'categorie_id' => Categories::all()->random()->id,
            'created_at' => fake()->dateTimeBetween($startDate = '-10 years', $endDate = '-5 years', $timezone = null)

        ],[
            'title' =>  'Easy Ways To Learn Everything About Construction',
            'slug' => fake()->slug(),
            'body' => $body,
            'premium' => false,
            'published' => true,
            'photo' => 'images/4.jpg',
            'admin_id' => Admin::all()->random()->id,
            'categorie_id' => Categories::all()->random()->id,
            'created_at' => fake()->dateTimeBetween($startDate = '-11 years', $endDate = '-5 years', $timezone = null)

        ],[
            'title' =>  '60 Things To Immediately Do About Building',
            'slug' => fake()->slug(),
            'body' => $body,
            'premium' => false,
            'published' => true,
            'photo' => 'images/6.jpg',
            'admin_id' => Admin::all()->random()->id,
            'categorie_id' => Categories::all()->random()->id,
            'created_at' => fake()->dateTimeBetween($startDate = '-5 years', $endDate = '-4 years', $timezone = null)
        ],




        ]);

        // Post::factory()
        // ->count(20)
        // ->create();
    }
}
