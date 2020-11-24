<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersModel;

use Exception;

class UsersController extends Controller
{
    public function index(){

        $Users = UsersModel::Users();
        $Total = count(UsersModel::Users());
        $Deleted = count(UsersModel::selectUsersDelete());

        return view('home', [
            'Users' => $Users,
            'Total' => $Total,
            'Deleted' => $Deleted
        ]);

    }

    public function create(){

        try{

            return view('create');

        } catch(Exception $e){
            return redirect()->back();
        }
    }

    public function store(Request $request){

        try{

            $count = ((count($request->request) - 1) / 3);
                for ($i=0; $i < $count ; $i++) {
                    UsersModel::createUser(
                    $request->input('nm_user-'. ($i+1)),
                    $request->input('tel_user-'. ($i+1)),
                    $request->input('email_user-'. ($i+1))
                    );
                }

            return redirect()->route('home');
        } catch(Exception $e){
            return redirect()->back();
        }

    }

    public function edit($id){
        try{

            $User = UsersModel::selectUser($id);
            return view('edit', [
                'User' => $User,
                'id' => $id
            ]);

        } catch(Exception $e){
            return redirect()->back();
        }
    }

    public function update(Request $request, $id){
        try{

            UsersModel::updateUser($id, $request->nm_user, $request->tel_user, $request->email_user);

            return redirect()->route('home');
        } catch(Exception $e){
            return redirect()->back();
        }

    }

    public function FreeAccess($id){

        try{

            UsersModel::freeAccessUser($id);

            return redirect()->back();
        } catch(Exception $e){
            return redirect()->back();
        }

    }

    public function delete($id){

        try{

            UsersModel::deleteUser($id);

            return redirect()->back();
        } catch(Exception $e){
            return redirect()->back();
        }

    }
}
