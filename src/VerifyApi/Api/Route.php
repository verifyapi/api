<?php declare(strict_types = 1);

namespace VerifyApi\Api;

final class Route
{

	public const HTTP_GET = 'GET';

	public const HTTP_POST = 'POST';

	public const DEFAULT_METHOD = 'process';


	private string $pattern;

	private string $method;

	private string $httpMethod;


	public function __construct(
		string $pattern,
		string $httpMethod = self::HTTP_GET,
		string $method = self::DEFAULT_METHOD
	)
	{
		$this->pattern = $pattern;
		$this->httpMethod = $httpMethod;
		$this->method = $method;
	}


	public function pattern(): string
	{
		return $this->pattern;
	}


	public function httpMethod(): string
	{
		return \strtolower($this->httpMethod);
	}


	public function method(): string
	{
		return $this->method;
	}

}
