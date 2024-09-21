<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('page_link_names', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('link_id');
            $table->string('lang');
            $table->string('text');
            $table->timestamps();
        });

        $dataItems = [
            [
                'link_id' => 1,
                'lang' => 'ru',
                'text' => 'О компании'
            ],
            [
                'link_id' => 1,
                'lang' => 'en',
                'text' => 'ABOUT US'
            ],
            [
                'link_id' => 2,
                'lang' => 'ru',
                'text' => 'Корпоративные мероприятия'
            ],
            [
                'link_id' => 2,
                'lang' => 'en',
                'text' => 'CORPORATE EVENTS'
            ],
            [
                'link_id' => 3,
                'lang' => 'ru',
                'text' => 'Фестивали'
            ],
            [
                'link_id' => 3,
                'lang' => 'en',
                'text' => 'FESTIVALS'
            ],
            [
                'link_id' => 4,
                'lang' => 'ru',
                'text' => 'Спортивные программы'
            ],
            [
                'link_id' => 4,
                'lang' => 'en',
                'text' => 'SPORT EVENTS'
            ],
            [
                'link_id' => 5,
                'lang' => 'ru',
                'text' => 'Семейные торжества'
            ],
            [
                'link_id' => 5,
                'lang' => 'en',
                'text' => 'FAMILY CELEBRATIONS'
            ],
            [
                'link_id' => 6,
                'lang' => 'ru',
                'text' => 'Ретриты'
            ],
            [
                'link_id' => 6,
                'lang' => 'en',
                'text' => 'RETREATS'
            ],
            [
                'link_id' => 7,
                'lang' => 'ru',
                'text' => 'Контакты'
            ],
            [
                'link_id' => 7,
                'lang' => 'en',
                'text' => 'CONTACT US'
            ],
        ];

        foreach ($dataItems as $item) {
            DB::table('page_link_names')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_link_names');
    }
};
