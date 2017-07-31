<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\CorreoBienvenido;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|string|max:255|unique:users',
            'domicilio' => 'required|string|max:255',
            'birthday' => 'required|date',
            'sexo' => 'required|string|max:255',
            'password' => 'required|string|min:3|confirmed',
        ]);
        dd($request->all());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'domicilio' => $data['domicilio'],
            'birthday' => $data['birthday'],
            'sexo' => $data['sexo'],
            'password' => bcrypt($data['password']),
        ]);

       
        $config = array(
                'email' => $data->input('email')
                    );
$datos = [];
 Mail::send($config,$datos, function($message) use($config)
          {
            $message->from('testsantillan@gmail.com');
            $message->to($config['email'],'usuario registrado');
            $message->subject('Bienvenidos');
          });


        // Mail::to($user->email)->send(new CorreoBienvenido($user));

       // return $user;
    }
}


