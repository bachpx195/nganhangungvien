<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\Routing\Middleware;
use Illuminate\Support\Facades\Session;

class Language implements Middleware {

	public function __construct(Application $app, Session $session, Request $request) {
		$this->app = $app;
		$this->session = $session;
		$this->request = $request;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		
		if (Session::has('locale')) {
			
			$this->app->setLocale(Session::get('locale'));
		}
		
		$host = $request->getHost();
		$parts = explode('.', $host);
		
		// Store subdomain in session
		Session::put('sub', $parts[0]);
		
		return $next($request);
	}

}
