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
        Schema::create('page_texts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_id');
            $table->string('lang');
            $table->string('type');
            $table->text('text');
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages');
        });

        $dataItems = [
            [
                'page_id' => 2,
                'lang' => 'en',
                'type' => 'title',
                'text' => 'CORPORATE EVENTS'
            ],
            [
                'page_id' => 2,
                'lang' => 'en',
                'type' => 'subtitle',
                'text' => 'High expertise and the professional team enable us to create vibrant events of any scale. We will raise your corporate spirit so that you can raise your profit.'
            ],
            [
                'page_id' => 2,
                'lang' => 'en',
                'type' => 'motto',
                'text' => 'We will raise your corporate spirit so that you can raise your profit'
            ],
            [
                'page_id' => 2,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Corporate Events'
            ],
            [
                'page_id' => 2,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Team-buildings'
            ],
            [
                'page_id' => 2,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Branding'
            ],
            [
                'page_id' => 2,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Catering'
            ],

            [
                'page_id' => 3,
                'lang' => 'en',
                'type' => 'title',
                'text' => 'FESTIVALS'
            ],
            [
                'page_id' => 3,
                'lang' => 'en',
                'type' => 'subtitle',
                'text' => 'Cooperation with artistic groups and musicians from all over the world and close interaction with state authorities give us an opportunity to organize both global international festivals and local cultural events.'
            ],
            [
                'page_id' => 3,
                'lang' => 'en',
                'type' => 'motto',
                'text' => 'Cooperation with artistic groups and musicians from all over the world'
            ],
            [
                'page_id' => 3,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Festivals'
            ],
            [
                'page_id' => 3,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Cultural Events'
            ],

            [
                'page_id' => 4,
                'lang' => 'en',
                'type' => 'title',
                'text' => 'SPORT EVENTS'
            ],
            [
                'page_id' => 4,
                'lang' => 'en',
                'type' => 'subtitle',
                'text' => 'Our energetic team with a sports expertise will organize team-building tournaments and business championships for your company in any kind of sports.'
            ],
            [
                'page_id' => 4,
                'lang' => 'en',
                'type' => 'motto',
                'text' => 'Team-building tournaments and business championships for your company in any kind of sports'
            ],
            [
                'page_id' => 4,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Corporate Tournaments'
            ],
            [
                'page_id' => 4,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Companies Competitions'
            ],

            [
                'page_id' => 5,
                'lang' => 'en',
                'type' => 'title',
                'text' => 'FAMILY CELEBRATIONS'
            ],
            [
                'page_id' => 5,
                'lang' => 'en',
                'type' => 'subtitle',
                'text' => 'Family is a truly important thing. Thats why we come up for organizing of any family celebration, should it be a wedding or a birthday party, as for the most significant event in your life.'
            ],
            [
                'page_id' => 5,
                'lang' => 'en',
                'type' => 'motto',
                'text' => 'Organizing of any family celebration, as for the most significant event in your life'
            ],
            [
                'page_id' => 5,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Weddings'
            ],
            [
                'page_id' => 5,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Birthdays'
            ],
            [
                'page_id' => 5,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Children Parties'
            ],

            [
                'page_id' => 6,
                'lang' => 'en',
                'type' => 'title',
                'text' => 'RETREATS'
            ],
            [
                'page_id' => 6,
                'lang' => 'en',
                'type' => 'subtitle',
                'text' => 'Sometimes we all need spiritual and physical restoration. Our retreats in picturesque tranquil settings will help you to reboot completely through mindfulness, body practices and reconnecting with nature.'
            ],
            [
                'page_id' => 6,
                'lang' => 'en',
                'type' => 'motto',
                'text' => 'Reboot completely through mindfulness and body practices '
            ],
            [
                'page_id' => 6,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Private retreats'
            ],
            [
                'page_id' => 6,
                'lang' => 'en',
                'type' => 'service',
                'text' => 'Corporate retreats'
            ]
        ];

        foreach ($dataItems as $item) {
            DB::table('page_texts')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_texts');
    }
};
