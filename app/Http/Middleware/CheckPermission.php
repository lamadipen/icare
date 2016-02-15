<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use App\Http\Requests\Request;

/**
 * Class CheckPermission
 * @package App\Http\Middleware
 */
class CheckPermission implements Middleware{

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if($this->userHasAccessTo($request)) {
            view()->share('currentUser', $request->user());
            return $next($request);
        }
        return redirect()->route('pagerestricted');
	}

    /**
     * @param Request $request
     * @return bool
     */
    protected function userHasAccessTo(Request $request) {
        return $this->hasPermission($request);
    }

    /**
     * @param Request $request
     * @return bool
     */
    protected function hasPermission(Request $request) {
        $required = $this->requiredPermission($request);
        return !$this->forbiddenRoute($request) && $request->user()->can($required);
    }

    /**
     * @param Request $request
     * @return array|null
     */
    protected function requiredPermission(Request $request) {
        $action = $request->route()->getAction();
        return isset($action['permission']) ? explode('|', $action['permission']) : null;
    }

    /**
     * @param $request
     * @return bool
     */
    protected function forbiddenRoute($request)
    {
        $action = $request->route()->getAction();
        if(isset($action['except'])) {
            return $action['except'] == $request->user()->role->role_slug;
        }
        return false;
    }
}
