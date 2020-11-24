<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsersModel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'user';

    protected $fillable = [
        'id',
        'nm_user',
        'tel_user',
        'email_user',
        'create_dt',
        'update_dt',
        'delete_dt'
    ];


    static public function Users(){

      $User = DB::table('user')->select([
                    'id',
                    'nm_user',
                    'tel_user',
                    'email_user',
                    'create_dt',
                    'delete_dt'
                    ])->get();

       return $User;
    }

    static public function selectUsersDelete(){

        $UserDelete= DB::table('user')->select([
                      'id',
                      'nm_user',
                      'tel_user',
                      'email_user',
                      'create_dt',
                      'delete_dt'
                      ])->where('delete_dt','!=',null)
                      ->get();

         return $UserDelete;
      }

    static public function selectUser($id){

        $Users = DB::table('user')->select([
                    'id',
                    'nm_user',
                    'tel_user',
                    'email_user',
                    'create_dt',
                    'delete_dt'
                    ])->where('id', '=', $id)
                    ->first();

        return $Users;

    }

    static public function createUser($nm_user, $tel_user, $email_user){

        $increment = DB::table('user')->max('id') + 1;

        DB::table('user')->insert([
            'id' => $increment,
            'nm_user' => $nm_user,
            'tel_user' => $tel_user,
            'email_user' => $email_user,
            'create_dt' => Carbon::now(),
            ]);

    }

    static public function updateUser($id, $nm_user, $tel_user, $email_user){

        DB::table('user')->where('id', '=', $id)
        ->update([
            'nm_user' => $nm_user,
            'tel_user' => $tel_user,
            'email_user' => $email_user,
            'update_dt' => Carbon::now(),
            ]);

    }

    static public function deleteUser($id){

        DB::table('user')->where('id', '=', $id)
        ->update([
            'delete_dt' => Carbon::now(),
            ]);

    }

    static public function freeAccessUser($id){

        DB::table('user')->where('id', '=', $id)
        ->update([
            'delete_dt' => null,
            ]);

    }

}
