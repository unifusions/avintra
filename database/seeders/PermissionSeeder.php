<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::insert([
            [
                'name' => 'view',
                'model' => 'Document',
                'slug' => 'view-document'
            ],
            [
                'name' => 'viewAny',
                'model' => 'Document',
                'slug' => 'viewAny-document'
            ],
            [
                'name' => 'create',
                'model' => 'Document',
                'slug' => 'create-document'
            ],
            [
                'name' => 'update',
                'model' => 'Document',
                'slug' => 'update-document'
            ],
            [
                'name' => 'delete',
                'model' => 'Document',
                'slug' => 'delete-document'
            ],
        ]);

        
        Permission::insert([
            [
                'name' => 'view',
                'model' => 'News',
                'slug' => 'view-news'
            ],
            [
                'name' => 'viewAny',
                'model' => 'News',
                'slug' => 'viewAny-news'
            ],
            [
                'name' => 'create',
                'model' => 'News',
                'slug' => 'create-news'
            ],
            [
                'name' => 'update',
                'model' => 'News',
                'slug' => 'update-news'
            ],
            [
                'name' => 'delete',
                'model' => 'News',
                'slug' => 'delete-news'
            ],
        ]);

        Permission::insert([
            [
                'name' => 'view',
                'model' => 'Division',
                'slug' => 'view-division'
            ],
            [
                'name' => 'viewAny',
                'model' => 'Division',
                'slug' => 'viewAny-division'
            ],
            [
                'name' => 'create',
                'model' => 'Division',
                'slug' => 'create-division'
            ],
            [
                'name' => 'update',
                'model' => 'Division',
                'slug' => 'update-division'
            ],
            [
                'name' => 'delete',
                'model' => 'Division',
                'slug' => 'delete-division'
            ],
        ]);

        Permission::insert([
            [
                'name' => 'view',
                'model' => 'Section',
                'slug' => 'view-section'
            ],
            [
                'name' => 'viewAny',
                'model' => 'Section',
                'slug' => 'viewAny-section'
            ],
            [
                'name' => 'create',
                'model' => 'Section',
                'slug' => 'create-section'
            ],
            [
                'name' => 'update',
                'model' => 'Section',
                'slug' => 'update-section'
            ],
            [
                'name' => 'delete',
                'model' => 'Section',
                'slug' => 'delete-section'
            ],
        ]);

        Permission::insert([
            [
                'name' => 'view',
                'model' => 'Gallery',
                'slug' => 'view-gallery'
            ],
            [
                'name' => 'viewAny',
                'model' => 'Gallery',
                'slug' => 'viewAny-gallery'
            ],
            [
                'name' => 'create',
                'model' => 'Gallery',
                'slug' => 'create-gallery'
            ],
            [
                'name' => 'update',
                'model' => 'Gallery',
                'slug' => 'update-gallery'
            ],
            [
                'name' => 'delete',
                'model' => 'Gallery',
                'slug' => 'delete-gallery'
            ],
        ]);

        Permission::insert([
            [
                'name' => 'view',
                'model' => 'TodayWord',
                'slug' => 'view-todayword'
            ],
            [
                'name' => 'viewAny',
                'model' => 'TodayWord',
                'slug' => 'viewAny-todayword'
            ],
            [
                'name' => 'create',
                'model' => 'TodayWord',
                'slug' => 'create-todayword'
            ],
            [
                'name' => 'update',
                'model' => 'TodayWord',
                'slug' => 'update-todayword'
            ],
            [
                'name' => 'delete',
                'model' => 'TodayWord',
                'slug' => 'delete-todayword'
            ],
        ]);

        

    }
}


