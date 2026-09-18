<?php

return [
    'token' => env('TINYMCE_TOKEN', '38rgnda75g9xodeg2oec45w235dc5npv1vbtf589h1f2dktp'),
    'plugins' => [
        'anchor', 'autolink', 'autoresize', 'charmap', 'codesample', 'code', 'emoticons', 'image', 'link',
        'lists', 'advlist', 'media', 'searchreplace', 'table', 'wordcount', 'directionality',
        'fullscreen', 'help', 'nonbreaking', 'pagebreak', 'preview', 'visualblocks', 'visualchars'
    ],
    'menubar' => '',
    'toolbar' => 'undo redo | blocks bold italic | '
        . 'link image media | align numlist bullist  | '
        . 'removeformat fullscreen preview code ',
    // 'options' => ['file_manager' => 'laravel-filemanager'],
    'callbacks' => []
];
