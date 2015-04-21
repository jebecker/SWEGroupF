<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;


class InstructorMiddleware {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		//Handle preventing guest from viewing anything but login.
		if ($this->auth->guest())
		{
			if ($request->ajax())
			{
				return response ('Unauthorized.', 401);
			}
			else
			{
				return redirect()->guest('auth/login');
			}
		}

		//if the user is logged in find out what kind of user and pas them through if they have access.
		$type = $this->auth->user()->user_type;

		if ($type == 'instructor' || $type == 'admin')
		{
			return $next($request);
		}

		//Else send them back to where they came from.
		return redirect()->back()->with('message', 'Access Denied');
	}

}
