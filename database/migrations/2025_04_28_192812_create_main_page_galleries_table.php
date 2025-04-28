<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('main_page_galleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_id');
            $table->string('img_small');
            $table->string('img');
            $table->timestamps();
        });

        $dataItems = [
            [
                'page_id' => 2,
                'img_small' => 'images/main-img/corp-events/1.webp',
                'img' => 'images/main-img/corp-events/gallery/1.webp'
            ],
            [
                'page_id' => 2,
                'img_small' => 'images/main-img/corp-events/2.webp',
                'img' => 'images/main-img/corp-events/gallery/2.webp'
            ],
            [
                'page_id' => 2,
                'img_small' => 'images/main-img/corp-events/3.webp',
                'img' => 'images/main-img/corp-events/gallery/3.webp'
            ],

            [
                'page_id' => 3,
                'img_small' => 'images/main-img/festivals/1.webp',
                'img' => 'images/main-img/festivals/gallery/1.webp'
            ],
            [
                'page_id' => 3,
                'img_small' => 'images/main-img/festivals/2.webp',
                'img' => 'images/main-img/festivals/festivals/2.webp'
            ],
            [
                'page_id' => 3,
                'img_small' => 'images/main-img/festivals/3.webp',
                'img' => 'images/main-img/festivals/gallery/3.webp'
            ],

            [
                'page_id' => 4,
                'img_small' => 'images/main-img/sport-events/1.webp',
                'img' => 'images/main-img/sport-events/gallery/1.webp'
            ],
            [
                'page_id' => 4,
                'img_small' => 'images/main-img/sport-events/2.webp',
                'img' => 'images/main-img/sport-events/festivals/2.webp'
            ],
            [
                'page_id' => 4,
                'img_small' => 'images/main-img/sport-events/3.webp',
                'img' => 'images/main-img/sport-events/gallery/3.webp'
            ],

            [
                'page_id' => 5,
                'img_small' => 'images/main-img/family-events/1.webp',
                'img' => 'images/main-img/family-events/gallery/1.webp'
            ],
            [
                'page_id' => 5,
                'img_small' => 'images/main-img/family-events/2.webp',
                'img' => 'images/main-img/family-events/festivals/2.webp'
            ],
            [
                'page_id' => 5,
                'img_small' => 'images/main-img/family-events/3.webp',
                'img' => 'images/main-img/family-events/gallery/3.webp'
            ],

            [
                'page_id' => 6,
                'img_small' => 'images/main-img/retrits/1.webp',
                'img' => 'images/main-img/retrits/gallery/1.webp'
            ],
            [
                'page_id' => 6,
                'img_small' => 'images/main-img/retrits/2.webp',
                'img' => 'images/main-img/retrits/festivals/2.webp'
            ],
            [
                'page_id' => 6,
                'img_small' => 'images/main-img/retrits/3.webp',
                'img' => 'images/main-img/retrits/gallery/3.webp'
            ],
        ];

        foreach ($dataItems as $item) {
            DB::table('main_page_galleries')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_page_galleries');
    }
};
