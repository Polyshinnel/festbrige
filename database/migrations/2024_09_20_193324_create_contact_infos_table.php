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
        Schema::create('contact_infos', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('text');
            $table->timestamps();
        });

        $dataItems = [
            [
                'type' => 'address',
                'text' => 'Dubai, Adel Ahmed Al Wahedi bldg, office 108'
            ],
            [
                'type' => 'address',
                'text' => 'Dubai, The One Tower, Sheikh Zayed Road, Barsha Heights, 13th floor, office 75'
            ],
            [
                'type' => 'phone',
                'text' => '+971 50 553 1428'
            ],
            [
                'type' => 'email',
                'text' => 'info@festbridgeeast.com'
            ],
        ];

        foreach ($dataItems as $item) {
            DB::table('contact_infos')->insert($item);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_infos');
    }
};
