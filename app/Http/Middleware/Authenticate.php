<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate {

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
		// Needs cleaned up, was unable to figure out why a switch statement was not working prior to sprint2 deadline.
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

		elseif ($this->auth->user()->user_type == 'admin')
		{
			// Uncomment to user_type displayed
			// echo "user_type: admin\n";

			// Adequate because admin can access any page.
			return $next($request);
		}

		elseif ($this->auth->user()->user_type == 'instructor')
		{
			// Uncomment to user_type displayed
			// echo "user_type: instructor\n";

			// Needs logic to restrict access to instructor viewable pages.
			return $next($request);
		}

		elseif ($this->auth->user()->user_type == 'student')
		{
			// Uncomment to user_type displayed
			// echo "user_type: student\n";

			// Needs logic to restrict access to student viewable pages.
			return $next($request);
		}

		else
		{
			// The default response is to treat anything but a valid user with a user_type
			// as a guest. Can later differentiate from guest() if desired.
			return redirect()->guest( 'auth/login' );
		}

	}

}
