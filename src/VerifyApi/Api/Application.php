<?php declare(strict_types = 1);

namespace VerifyApi\Api;

final class Application
{

	private \Slim\App $app;

	/**
	 * @var array<int, \VerifyApi\Api\IController>
	 */
	private array $controllers;


	public function __construct(
		\VerifyApi\Api\Controller\Provider $provider
	)
	{
		$this->controllers = $provider->provide();

		$this->initialize();
	}


	private function initialize(): void
	{
		$this->app = \Slim\Factory\AppFactory::create();

		$this->registerRoutes();
	}


	private function registerRoutes(): void
	{

		foreach ($this->controllers as $controller) {

			/** @var \VerifyApi\Api\Route $route */
			foreach ($controller->getRoutes() as $route) {
				$httpMethod = $route->httpMethod();
				$this->app->$httpMethod(
					$route->pattern(),
					static function (
						\Psr\Http\Message\RequestInterface $request,
						\Psr\Http\Message\ResponseInterface $response
					) use ($controller, $route) {

					$controller->setRequest($request);
					$controller->setResponse($response);

                    $query = ! empty($query)
                        ? \VerifyApi\Api\Query\Query::provider($request->getUri()->getQuery())
                        : NULL
                    ;

                    $method = $route->method();
                    $controller->$method($query);

					return $controller->getResponse();
				});
			}

		}

	}


	public function run(): void
	{
		$this->app->run();
	}

}
