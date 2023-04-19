<?php 

if (! function_exists('settings')) {

     
     function settings($key, $default = null)
     {
         if (is_null($key)) {
             return new \App\Models\Settings();
         }
 
         if (is_array($key)) {
             return \App\Models\Settings::set($key[0], $key[1]);
         }
 
         $value = \App\Models\Settings::get($key);
 
         return is_null($value) ? value($default) : $value;
     }
 }