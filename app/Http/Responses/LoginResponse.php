<?php
 
namespace App\Http\Responses;
 
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
 
class LoginResponse implements LoginResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        $home = '';
        $role = auth()->user()->roles()->first();

        switch ($role->name) {
            case 'admin':
                $home = '/admin/dashboard';
                break;
            case 'user' :
                $home = '/';
                break;
        }
        
        return redirect()->intended($home);
    }
}