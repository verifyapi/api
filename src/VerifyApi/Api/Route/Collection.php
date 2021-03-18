<?php declare(strict_types = 1);

namespace VerifyApi\Api\Route;

class Collection implements \IteratorAggregate, \Countable
{

	/**
	 * @var array<int, \VerifyApi\Api\Route>
	 */
	private array $routes = [];


	public function __construct(\VerifyApi\Api\Route ...$routes)
	{
		$this->routes = $routes;
	}


	public function add(\VerifyApi\Api\Route $route): void
	{
		$this->routes[] = $route;
	}


	public function count(): int
	{
		return \count($this->routes);
	}


	public function getIterator(): \ArrayIterator
	{
		return new \ArrayIterator($this->routes);
	}

}
