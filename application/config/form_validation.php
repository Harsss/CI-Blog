<?php

$config=[
'AddArticleRule' =>[
    [
'field'=>'Title',
'Label'=>'Article Title',
'rules'=>'required',

    ],

    [
    'field'=>'Body',
    'Label'=>'Article Body',
    'rules'=>'required|min_length[5]',
    
    ]

    ]

];

?>