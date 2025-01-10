<?php

use App\Models\setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });
        setting::create([
            'key'=>'_site_name',
            'label'=>'Judul Situs',
            'value'=>'Tugas CRUD Laravel',
            'type'=>'text',

        ]);
        setting::create([
            'key'=>'_location',
            'label'=>'Alamat Kantor',
            'value'=>'Kraksaan, Kabupaten Probolinggo',
            'type'=>'text',]);

        setting::create([
                'key'=>'_youtube',
                'label'=>'Youtube',
                'value'=>'https://www.youtube.com/@fagerrusadi8472',
                'type'=>'text',
            ]);
        setting::create([
                'key'=>'_instagram',
                'label'=>'Instagram',
                'value'=>'https://www.instagram.com/fager_rusadi',
                'type'=>'text',
            ]);
        setting::create([
                'key'=>'_facebook',
                'label'=>'Facebook',
                'value'=>'https://www.facebook.com/adhie.lovers',
                'type'=>'text',
            ]);
        setting::create([
                'key'=>'_twitter',
                'label'=>'twitter',
                'value'=>'https://www.twitter.com/@fagerrusadi',
                'type'=>'text',
            ]);
        setting::create([
                'key'=>'_site_description',
                'label'=>'Site Description',
                'value'=>'Website sederhana dengan admin filament, menggunakan laravel 10 sebagai frameworknya.',
                'type'=>'text',
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
