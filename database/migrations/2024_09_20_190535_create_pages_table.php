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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('page_description');
            $table->timestamps();
        });

        $dataItems = [
            [
                'page_title' => 'Fest Bridge East - events memorable for a lifetime',
                'page_description' => 'Fest Bridge East is an international company organizing corporate events in the UAE. We transform any event into a memorable experience for a lifetime.',
            ],
            [
                'page_title' => 'Fest Bridge East | Corporate Events',
                'page_description' => 'High expertise and the professional team enable us to create vibrant events of any scale. We will raise your corporate spirit so that you can raise your profit.',
            ],
            [
                'page_title' => 'Fest Bridge East | Festivals',
                'page_description' => 'Cooperation with artistic groups and musicians from all over the world and close interaction with state authorities give us an opportunity to organize both global international festivals and local cultural events.',
            ],
            [
                'page_title' => 'Fest Bridge East | Sport Events',
                'page_description' => 'Our energetic team with a sports expertise will organize team-building tournaments and business championships for your company in any kind of sports.',
            ],
            [
                'page_title' => 'Fest Bridge East | Family Celebrations',
                'page_description' => 'Family is a truly important thing. That is why we come up for organizing of any family celebration, should it be a wedding or a birthday party, as for the most significant event in your life.',
            ],
            [
                'page_title' => 'Fest Bridge East | Retreats',
                'page_description' => 'Sometimes we all need spiritual and physical restoration. Our retreats in picturesque tranquil settings will help you to reboot completely through mindfulness, body practices and reconnecting with nature.',
            ],
            [
                'page_title' => 'Fest Bridge East | Contacts',
                'page_description' => 'For a memorable event, unique activity or bright ceremony contact us via this feedback form or any other way.',
            ],
        ];

        foreach ($dataItems as $item) {
            DB::table('pages')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
