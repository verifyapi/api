<?php declare(strict_types = 1);

namespace VerifyApi\Api;

final class Application
{

	private \Slim\App $app;


	public function __construct()
	{
		$this->initialize();
	}


	private function initialize(): void
	{
		$this->app = \Slim\Factory\AppFactory::create();
	}


	public function run(): void
	{
		$this->app->run();
	}

}
