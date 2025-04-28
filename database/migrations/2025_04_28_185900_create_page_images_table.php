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
        Schema::create('page_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_id');
            $table->string('img_small');
            $table->string('img');
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages');
        });

        $dataItems = [
            [
                'page_id' => 2,
                'img_small' => 'images/corp-events/1.webp',
                'img' => 'images/corp-events/gallery/1.webp'
            ],
            [
                'page_id' => 2,
                'img_small' => 'images/corp-events/2.webp',
                'img' => 'images/corp-events/gallery/2.webp'
            ],
            [
                'page_id' => 2,
                'img_small' => 'images/corp-events/3.webp',
                'img' => 'images/corp-events/gallery/3.webp'
            ],
            [
                'page_id' => 2,
                'img_small' => 'images/corp-events/4.webp',
                'img' => 'images/corp-events/gallery/4.webp'
            ],
            [
                'page_id' => 2,
                'img_small' => 'images/corp-events/5.webp',
                'img' => 'images/corp-events/gallery/5.webp'
            ],
            [
                'page_id' => 2,
                'img_small' => 'images/corp-events/6.webp',
                'img' => 'images/corp-events/gallery/6.webp'
            ],

            [
                'page_id' => 3,
                'img_small' => 'images/festivals/1.webp',
                'img' => 'images/festivals/gallery/1.webp'
            ],
            [
                'page_id' => 3,
                'img_small' => 'images/festivals/2.webp',
                'img' => 'images/festivals/gallery/2.webp'
            ],
            [
                'page_id' => 3,
                'img_small' => 'images/festivals/3.webp',
                'img' => 'images/festivals/gallery/3.webp'
            ],
            [
                'page_id' => 3,
                'img_small' => 'images/festivals/4.webp',
                'img' => 'images/festivals/gallery/4.webp'
            ],
            [
                'page_id' => 3,
                'img_small' => 'images/festivals/5.webp',
                'img' => 'images/festivals/gallery/5.webp'
            ],
            [
                'page_id' => 3,
                'img_small' => 'images/festivals/6.webp',
                'img' => 'images/festivals/gallery/6.webp'
            ],

            [
                'page_id' => 4,
                'img_small' => 'images/sport-events/1.webp',
                'img' => 'images/sport-events/gallery/1.webp'
            ],
            [
                'page_id' => 4,
                'img_small' => 'images/sport-events/2.webp',
                'img' => 'images/sport-events/gallery/2.webp'
            ],
            [
                'page_id' => 4,
                'img_small' => 'images/sport-events/3.webp',
                'img' => 'images/sport-events/gallery/3.webp'
            ],
            [
                'page_id' => 4,
                'img_small' => 'images/sport-events/4.webp',
                'img' => 'images/sport-events/gallery/4.webp'
            ],
            [
                'page_id' => 4,
                'img_small' => 'images/sport-events/5.webp',
                'img' => 'images/sport-events/gallery/5.webp'
            ],
            [
                'page_id' => 4,
                'img_small' => 'images/sport-events/6.webp',
                'img' => 'images/sport-events/gallery/6.webp'
            ],

            [
                'page_id' => 5,
                'img_small' => 'images/family-events/1.webp',
                'img' => 'images/family-events/gallery/1.webp'
            ],
            [
                'page_id' => 5,
                'img_small' => 'images/family-events/2.webp',
                'img' => 'images/family-events/gallery/2.webp'
            ],
            [
                'page_id' => 5,
                'img_small' => 'images/family-events/3.webp',
                'img' => 'images/family-events/gallery/3.webp'
            ],
            [
                'page_id' => 5,
                'img_small' => 'images/family-events/4.webp',
                'img' => 'images/family-events/gallery/4.webp'
            ],
            [
                'page_id' => 5,
                'img_small' => 'images/family-events/5.webp',
                'img' => 'images/family-events/gallery/5.webp'
            ],
            [
                'page_id' => 5,
                'img_small' => 'images/family-events/6.webp',
                'img' => 'images/family-events/gallery/6.webp'
            ],

            [
                'page_id' => 6,
                'img_small' => 'images/retrits/1.webp',
                'img' => 'images/retrits/gallery/1.webp'
            ],
            [
                'page_id' => 6,
                'img_small' => 'images/retrits/2.webp',
                'img' => 'images/retrits/gallery/2.webp'
            ],
            [
                'page_id' => 6,
                'img_small' => 'images/retrits/3.webp',
                'img' => 'images/retrits/gallery/3.webp'
            ],
            [
                'page_id' => 6,
                'img_small' => 'images/retrits/4.webp',
                'img' => 'images/retrits/gallery/4.webp'
            ],
            [
                'page_id' => 6,
                'img_small' => 'images/retrits/5.webp',
                'img' => 'images/retrits/gallery/5.webp'
            ],
            [
                'page_id' => 6,
                'img_small' => 'images/retrits/6.webp',
                'img' => 'images/retrits/gallery/6.webp'
            ],
        ];

        foreach ($dataItems as $item) {
            DB::table('page_images')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_images');
    }
};
