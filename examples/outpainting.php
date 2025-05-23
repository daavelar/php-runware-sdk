<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Daavelar\PhpRunwareSDK\Runware;

$runware = new Runware('your_api_key');

$imageUrl = $runware->outpainting('1girl, solo, in a room, long hair, blue eyes, looking at viewer, cg, 8k, high quality, photo realistic', 'https://i.pinimg.com/originals/00/00/00/00000000000000000000000000000000.jpg', [
        'top' => 256,
        'bottom' => 256,
        'left' => 256,
        'right' => 256
    ], 0.8);

echo $imageUrl;