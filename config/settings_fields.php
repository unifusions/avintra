<?php

return [
     'app' => [
          'title' => 'General',
          'desc' => 'All the general settings for application.',
          'icon' => 'glyphicon glyphicon-sunglasses',

          'elements' => [
               [
                    'type' => 'text', // input fields type
                    'data' => 'string', // data type, string, int, boolean
                    'name' => 'app_name', // unique name for field
                    'label' => 'App Name', // you know what label it is
                    'rules' => 'required|min:2|max:50', // validation rule of laravel
                    'class' => 'w-auto px-2', // any class for input
                    'value' => 'CoolApp' // default value if you want
               ]
          ]
     ],

     'homepage' => [
          'title' => 'Home Page Settings',
          'desc' => 'Landing page settings',
          'icon' => 'glyphicon glyphicon-envelope',
          'elements' => [
               [
                    'type' => 'text', // input fields type
                    'data' => 'string', // data type, string, int, boolean
                    'name' => 'homepage_settings', // unique name for field
                    'label' => 'Landing Page Settings', // you know what label it is
                    'class' => 'w-auto px-2', // any class for input
                    'value' => 'CoolApp' // default value if you want
               ]
          ]
     ],
     
];
