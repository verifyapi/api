<?php declare(strict_types = 1);

namespace VerifyApi\ApiTests\Unit;

final class ParametersTest extends \VerifyApi\ApiTests\TestCase
{

	private \VerifyApi\Api\Parameters\Provider $parametersProvider;


	public function __construct()
	{
		parent::__construct();
		$this->parametersProvider = new \VerifyApi\Api\Parameters\Provider(
			$this->configurator->createContainer()
		);
	}

	public function testParameters(): void
	{
		$this->assertTrue($this->parametersProvider->get('basePath') === '/');
	}

}
