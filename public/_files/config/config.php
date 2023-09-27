<?php

// https://www.files.gallery/docs/config/
return array_merge([
    'files_exclude' => '/^(\.user\.ini|_preview\.jpg|robots\.txt)$/',
    'folder_preview_default' => '_preview.jpg',
    'image_resize_max_pixels' => 300000000,
    'image_resize_memory_limit' => 1024,
    'menu_show' => false,
], require __DIR__ . '/../../../config/files.gallery.php');
