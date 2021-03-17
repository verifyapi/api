<?php declare(strict_types = 1);

namespace VerifyApi\ApiTests;

class TestCase extends \PHPUnit\Framework\TestCase
{

	protected \VerifyApi\Api\Configurator $configurator;


	public function __construct()
	{
		parent::__construct();

		$this->configurator = new \VerifyApi\Api\Configurator();
		$this->configurator->setTempDir(__DIR__ . '/../../temp');
	}

}
