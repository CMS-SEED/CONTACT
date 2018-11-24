<?php

namespace Cms_Framework_Seed;

use DB;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'id'      => '1',
                'name'    => '30Hills',
                'phone'   => '+',
                'mobile'  => '',
                'email'   => 'hello@30hills.com',
                'website' => 'http://30hills.com',
                'details' => 'INFO',
                'address' => 'INFOPARK',
                'street'  => 'k',
                'city'    => 'k',
                'state'   => 'k',
                'country' => 'rs',
                'zip'     => '11000',
                'lat'     => '',
                'lng'     => '',
                'status'  => 'Show',
                'slug'    => 'headoffice',
            ],
        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'contact.contact.view',
                'name' => 'View Contact',
            ],
            [
                'slug' => 'contact.contact.create',
                'name' => 'Create Contact',
            ],
            [
                'slug' => 'contact.contact.edit',
                'name' => 'Update Contact',
            ],
            [
                'slug' => 'contact.contact.delete',
                'name' => 'Delete Contact',
            ],
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/contact/contact',
                'name'        => 'Contact',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],
            [
                'parent_id'   => 4,
                'key'         => null,
                'url'         => 'contact.htm',
                'name'        => 'Contact',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],
            [
                'parent_id'   => 5,
                'key'         => null,
                'url'         => 'contact.htm',
                'name'        => 'Contact',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([

        ]);
    }
}
