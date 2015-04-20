<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;


class AdminMiddleware {

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
		$type = $this->auth->user()->user_type;

		if ($type == 'admin')
		{
			return $next($request);
		}
		return redirect()->back()->with('message', 'Access Denied');

	}

}
