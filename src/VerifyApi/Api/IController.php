<?php declare(strict_types = 1);

namespace VerifyApi\Api;

interface IController
{

	public function setRequest(\Psr\Http\Message\RequestInterface $request): void;


	public function setResponse(\Psr\Http\Message\ResponseInterface $response): void;


	public function getResponse(): \Psr\Http\Message\ResponseInterface;


	/**
	 * @return \VerifyApi\Api\Route\Collection<\VerifyApi\Api\Route>
	 */
	public function getRoutes(): \VerifyApi\Api\Route\Collection;

}
