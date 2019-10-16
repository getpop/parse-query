<?php
namespace PoP\QueryParsing\Parsers;

interface QueryParserInterface
{
    public function splitElements(string $query, string $separator = ',', $skipFromChars = '(', $skipUntilChars = ')', $ignoreSkippingFromChar = null, $ignoreSkippingUntilChar = null): array;
}