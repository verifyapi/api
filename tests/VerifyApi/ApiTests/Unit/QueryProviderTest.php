<?php declare(strict_types = 1);

namespace VerifyApi\ApiTests\Unit;

final class QueryProviderTest extends \VerifyApi\ApiTests\TestCase
{

	public function testQuery(): void
	{
		$query = \VerifyApi\Api\Query\Query::provider('?foo=bar&name=doe');

		$this->assertTrue(isset($query['foo']));
		$this->assertTrue($query['name'] === 'doe');
	}

}
