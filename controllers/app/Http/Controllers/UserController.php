<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //* eloquent ORM
        $users = User::all(); //? Trae todos los registros
        // $users = User::orderBy('age', 'asc')->get();
        // $users = User::find(1);
        // $users = User::where('age', '>=', 25)->get();

        //* sql Raw - consultas SQL
        // $users = DB::select("SELECT * FROM users WHERE age >= 25");

        //* metodos db
        // $users = DB::table('users')->select('name', 'age')->where('age', '>=', 15)->orderBy('age', 'asc')->get();

        return view('user.index', compact('users'));
    }

    public function create()
    {
        $user = new User;
        $user->name = 'Tomas';
        $user->email = 'tomas@me.com';
        $user->password = Hash::make('123456');
        $user->age = 26;
        $user->adress = 'Calle 123';
        $user->zip_code = '12345';
        $user->save();

        User::create([
            'name' => 'Juan',
            'email' => 'juan@me.com',
            'password' => Hash::make('123456'),
            'age' => 22,
            'adress' => 'Calle 321',
            'zip_code' => '54321'
        ]);

        User::create([
            'name' => 'Mari',
            'email' => 'mari@me.com',
            'password' => Hash::make('123456'),
            'age' => 25,
            'adress' => 'Calle 333',
            'zip_code' => '123321'
        ]);

        return redirect()->route('user.index');
    }
}
