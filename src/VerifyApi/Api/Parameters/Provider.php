<?php declare(strict_types = 1);

namespace VerifyApi\Api\Parameters;

final class Provider
{

	private \Nette\DI\Container $container;


	public function __construct(\Nette\DI\Container $container)
	{
		$this->container = $container;
	}


	public function get(string $name)
	{
		$parameters = $this->container->getParameters();

		\var_dump($parameters[$name]);
		return $parameters[$name] ?? NULL;
	}
}
