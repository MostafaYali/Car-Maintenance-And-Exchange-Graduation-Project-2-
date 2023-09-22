<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\users;
use Symfony\Component\HttpFoundation\Response;

class alreadyloggedin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Session()->has('AuthUser') && url('/login') == $request->url() || url('') == $request->url())
        {
            $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
            foreach($data as $usertype)
            {
                if($usertype->UserType === "user")
                {
                    return Redirect('/auth/user/view')->with('error' , 'You Already LoggedIN');
                }
                elseif($usertype->UserType === "workshop")
                {
                    return Redirect('/auth/user/workshop')->with('error' , 'You Already LoggedIN');
                }
                elseif($usertype->UserType === "admin")
                {
                    return Redirect('/admin')->with('error' , 'You Already LoggedIN');
                }
            }
        }
        return $next($request);
    }
}
