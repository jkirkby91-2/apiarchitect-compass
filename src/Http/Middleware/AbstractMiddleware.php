<?php
	declare(strict_types=1);

	namespace ApiArchitect\Compass\Http\Middleware {

		use Closure;

		use Psr\{
			Http\Message\ServerRequestInterface
		};

		/**
		 * Class AbstractMiddleware
		 *
		 * @package ApiArchitect\Compass\Http\Middleware
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		abstract class AbstractMiddleware
		{

			/**
			 * handle()
			 * @param \Psr\Http\Message\ServerRequestInterface $request
			 * @param \Closure                                 $next
			 *
			 * @return \Closure
			 */
			abstract public function handle(ServerRequestInterface $request, Closure $next) : Closure;
		}
	}
