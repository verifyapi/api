<?php declare(strict_types = 1);

namespace VerifyApi\Api;

abstract class Controller implements IController
{

	protected \Psr\Http\Message\RequestInterface $request;

	protected \Psr\Http\Message\ResponseInterface $response;


	public function setRequest(\Psr\Http\Message\RequestInterface $request): void
	{
		$this->request = $request;
	}


	public function getRequest(): \Psr\Http\Message\RequestInterface
	{
		return $this->request;
	}


	public function setResponse(\Psr\Http\Message\ResponseInterface $response): void
	{
		$this->response = $response;
	}


	/**
	 * @param array<mixed> $data
	 */
	public function jsonResponse(array $data): void
	{
		$this->response = new \Laminas\Diactoros\Response\JsonResponse($data);
	}


	public function getResponse(): \Psr\Http\Message\ResponseInterface
	{
		return $this->response;
	}

}
