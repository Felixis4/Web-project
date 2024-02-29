<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;

class AccountsController extends Controller
{
    public function index()
    {
        $accounts = account::all();

        return view('enter.log-in', ['accounts' => $accounts]);
    }

    public function store(Request $request){

        $request->validate([
            'username' =>'required|min:4',
            'email'=>'required|email'
        ]);
    
        $account = new account;
        $account->username = $request->username;
        $account->email = $request->email;
        $account->save();
    
        return redirect()->route('accounts')->with('success', 'User created successfully');
    }

    public function destroy($id){
        $account = account::find($id);
        $account->delete();
        return redirect()->route('create-user')->with('success', 'User deleted successfully');
    }

    public function destroy2($id){
        $account = account::find($id);
        $account->delete();
        return redirect()->route('users-list')->with('success', 'User deleted successfully');
    }

    public function show($id){
        $account = account::find($id);
        return view('enter.show', ['accounts' => $account]);
    }

    public function update(Request $request, $id){
        $account = account::find($id);
        
        $account->username = $request->username;
        $account->email = $request->email;
        $account->save();

        return redirect()->route('users-list')->with('success', 'User updated successfully');
    }
    public function users_list(){
        $accounts = Account::all(); 
        return view('enter.list-users', compact('accounts'));
    }
}
