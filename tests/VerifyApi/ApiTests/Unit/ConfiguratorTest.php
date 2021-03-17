<?php declare(strict_types = 1);

namespace VerifyApi\ApiTests\Unit;


final class ConfiguratorTest extends \VerifyApi\ApiTests\TestCase
{

	public function testContainer(): void
	{
		$container = $this->configurator->getContainer();

		$this->assertTrue($container instanceof \Nette\DI\Container);
		$this->assertTrue($container->getByType(\VerifyApi\Api\Application::class) instanceof \VerifyApi\Api\Application);
	}

}
