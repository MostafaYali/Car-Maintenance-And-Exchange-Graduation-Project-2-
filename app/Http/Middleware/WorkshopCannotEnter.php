<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\users;

class WorkshopCannotEnter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
            $data = ['Logged' => users::where('id' , '=' , Session('AuthUser'))->first()];
            foreach($data as $usertype)
            {
                if($usertype->UserType === "workshop")
                {
                    return Redirect('/auth/user/workshop')->with('error' , 'Workshop Account Cannot Access This Page');
                }
            }
        return $next($request);
    }
}
