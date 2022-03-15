<?php declare(strict_types = 1);

namespace VerifyApi\Api;

final class Configurator
{

	/**
	 * @var array<string>
	 */
	private array $configs = [];

	private string $tempDir = __DIR__ . '/temp';

	private bool $debug = FALSE;


	public function addConfig(string $path): void
	{
		$this->configs[] = $path;
	}


	public function setTempDir(string $path): void
	{
		$this->tempDir = $path;
	}


	public function setDebugMode(bool $debug): void
	{
		$this->debug = $debug;
	}


	public function createContainer(): \Nette\DI\Container
	{
		$loader = new \Nette\DI\ContainerLoader($this->tempDir, $this->debug);

		/** @var \Nette\DI\Container $class */
		$class = $loader->load(function ($compiler): void {
			$compiler->loadConfig(__DIR__ . '/config/common.neon');
			foreach ($this->configs as $config) {
				$compiler->loadConfig($config);
			}
		});

		return new $class;
	}

}
