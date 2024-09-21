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
        Schema::create('page_links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_id');
            $table->string('link');
            $table->timestamps();
        });

        $dataItems = [
            [
                'page_id' => '1',
                'link' => '/'
            ],
            [
                'page_id' => '2',
                'link' => '/corporate-events'
            ],
            [
                'page_id' => '3',
                'link' => '/festivals'
            ],
            [
                'page_id' => '4',
                'link' => '/sport-events'
            ],
            [
                'page_id' => '5',
                'link' => '/family-celebrations'
            ],
            [
                'page_id' => '6',
                'link' => '/retreats'
            ],
            [
                'page_id' => '7',
                'link' => '/contacts'
            ],
        ];

        foreach ($dataItems as $item) {
            DB::table('page_links')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_links');
    }
};
