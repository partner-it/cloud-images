<?php

Cache::config('resized_images', [
    'duration'  => '+1 week',
    'className' => 'File',
    'path'      => CACHE . 'resized_images/'
]);
