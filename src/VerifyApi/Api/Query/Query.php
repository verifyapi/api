<?php declare(strict_types = 1);

namespace VerifyApi\Api\Query;

final class Query
{

	/**
	 * @return array<string>
	 */
	public static function provider(string $queryString): array
	{
		$queryString = \str_replace('?', '', $queryString);

		$queries = \explode('&', $queryString);

		$result = NULL;
		foreach ($queries as $query) {
			$exp = \explode('=', $query);
			$result[$exp[0]] = $exp[1];
		}

		return $result;
	}

}
