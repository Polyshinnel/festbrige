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
        Schema::create('main_page_texts', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->text('text');
            $table->timestamps();
        });

        $dataItems = [
            [
                'type' => 'about_title',
                'text' => 'ABOUT US'
            ],
            [
                'type' => 'about_subtitle',
                'text' => 'Fest Bridge East is an international company organizing corporate events in the UAE. We transform any event into a memorable experience for a lifetime.'
            ],
            [
                'type' => 'counter',
                'text' => '5'
            ],
            [
                'type' => 'counter_subtitle',
                'text' => 'years experience'
            ],
            [
                'type' => 'counter',
                'text' => '70'
            ],
            [
                'type' => 'counter_subtitle',
                'text' => 'events'
            ],
            [
                'type' => 'counter',
                'text' => '15 000'
            ],
            [
                'type' => 'counter_subtitle',
                'text' => 'participants'
            ],
        ];

        foreach ($dataItems as $item) {
            DB::table('main_page_texts')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_page_texts');
    }
};
