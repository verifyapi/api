<?php declare(strict_types = 1);

namespace VerifyApi\Api\Controller;

final class Provider
{

	private \Nette\DI\Container $container;


	public function __construct(\Nette\DI\Container $container)
	{
		$this->container = $container;
	}


	/**
	 * @return array<int, \VerifyApi\Api\IController>
	 */
	public function provide(): array
	{
		$controllersName = $this->container->findByType(\VerifyApi\Api\Controller::class);

		$controllerClasses = [];

		foreach ($controllersName as $name) {

			try {
				/** @var \VerifyApi\Api\IController $controllerClass */
				$controllerClass = $this->container->getByName($name);
				$controllerClasses[] = $controllerClass;
			} catch (\Nette\DI\MissingServiceException $exception) {

			}

		}

		return $controllerClasses;
	}

}
