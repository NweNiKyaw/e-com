<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            ['id'=>1, 
            'name'=>'admin',
            'type'=>'admin', 
            'mobile'=>'098875456',
            'email'=>'admin@gmail.com', 
            'password'=>'$2y$10$Qhjx7NoNmFCOIWHkJmGJKOSMVD8vMyk2oXaLmbszHWj6rVkIk8ama', 
            'image'=>'', 
            'status'=>1],

            ['id'=>2,
            'name'=>'john',
            'type'=>'sub-admin', 
            'mobile'=>'098875456',
            'email'=>'john@gmail.com', 
            'password'=>'$2y$10$Qhjx7NoNmFCOIWHkJmGJKOSMVD8vMyk2oXaLmbszHWj6rVkIk8ama', 
            'image'=>'', 
            'status'=>1],

            ['id'=>3, 
            'name'=>'steve',
            'type'=>'sub-admin', 
            'mobile'=>'098875456',
            'email'=>'steve@gmail.com', 
            'password'=>'$2y$10$Qhjx7NoNmFCOIWHkJmGJKOSMVD8vMyk2oXaLmbszHWj6rVkIk8ama', 
            'image'=>'', 
            'status'=>1],
        ];

        DB::table('admins')->insert($adminRecords);

        // foreach($adminRecords as $key => $record){
        //     \App\Admin::create($record);
        // }
    }
}
