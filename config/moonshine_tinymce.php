<?php

return [
    'token' => env('TINYMCE_TOKEN', 'a2tugagn6donmxv7bacbu4bylmreak3ee7hnchodpz961lu0'),
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
