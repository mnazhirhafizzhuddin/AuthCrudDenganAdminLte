<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    DB::table('users')->insert([
        'name'=>'HAfIZ',
        'Alamat'=>'CitraPrimaSerpong',
        'jenis_kelamin'=>'laki-laki',
        'jabatan'=>'Manager',
        'nik'=>'98989888888',
        'no_telpon'=>'9898878877',
        'email'=>'ucok35crv@gmail.com',
        'Password'=>bcrypt('12345'),
        'role'=>'user'

        ]);
    }
}
