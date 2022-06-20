<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateApi extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next, ...$guards)
    {
        return parent::handle($request, $next, $guards); // TODO: Change the autogenerated stub
    }

    protected function authenticate($request, array $guards)
    {
        $ee = 'sjdhsjkdy76347hjjkfdhfuuytruier';

        $token = $request->query('api_token');
        if (empty($token)) {
            $token = $request->input('api_token');
        }
        if (empty($token)) {
            $token = $request->bearerToken();
        }

        if ($token == $ee) {
            return;
        }

        $this->unauthenticated($request, $guards);

    }



}
