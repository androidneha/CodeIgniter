<?php
$config=[
    'add_article_rules'=>[
            [
                'field'=>'title',
                'label'=>'Article Tilte',
                'rules'=>'required'
            ],
             [
                'field'=>'body',
                'label'=>'Article Body',
                'rules'=>'required',
            ]
        ],
    'admin_login'=>
    [
         [
                'field'=>'username',
                'label'=>'User Name',
                'rules'=>'required'
            ],
             [
                'field'=>'password',
                'label'=>'Password',
                'rules'=>'required'
            ]
    ]
];

