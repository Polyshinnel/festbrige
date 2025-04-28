<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MoveImageToStorage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:move-image-to-storage';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Copy image folder to storage';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sourcePath = public_path('assets/img/images');
        $destinationPath = storage_path('app/public/images');
        if (File::exists($sourcePath)) {
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0777, true);
            }

            File::copyDirectory($sourcePath, $destinationPath);

            $this->info('Папка и файлы успешно скопированы в хранилище.');
        } else {
            $this->error('Исходная папка не существует.');
        }
    }
}
