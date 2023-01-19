<?php

namespace App\Http\Middleware;

use App\Http\Requests\TaskList\CheckOwnerRequest;
use Closure;
use Illuminate\Http\Request;

class CheckOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->isOwnerOfTaskList($request->route()->parameters['taskList_id']['id']))
            return $next($request);
        else
            return redirect()->route('dashboard');
    }
}
