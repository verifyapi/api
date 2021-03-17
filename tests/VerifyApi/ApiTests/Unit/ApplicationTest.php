<?php declare(strict_types = 1);

namespace VerifyApi\ApiTests\Unit;

final class ApplicationTest extends \VerifyApi\ApiTests\TestCase
{

	public function testApplication(): void
	{
		$this->expectException(\Slim\Exception\HttpNotFoundException::class);

		/** @var ?\VerifyApi\Api\Application $application */
		$application = $this->configurator->getContainer()->getByType(\VerifyApi\Api\Application::class);

		if ( ! $application) {
			throw new \Exception('Application not found!');
		}

		$application->run();
	}

}
