<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Auth\Middleware\Authenticate as Middleware;

class CheckActionAccess
{
    protected $protected = [
        'create',
        'edit',
        'store',
        'update',
        'destroy',
    ];
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $action = $request->route()->getActionMethod();
        // wenn nicht eingeloggt und schreib-actions (protected array) aufgerufen werden
        if(in_array($action, $this->protected) && auth()->guest()) {
            // wenn kein ajax oder api request vorliegt
            if (false === $request->expectsJson()) {
                // dann leite zur login seite um
                return redirect()->route('login');
            }
        }
        return $next($request);
    }
}
