<?php

namespace molyakov\parser;

/**
 * @author Anatoliy Molyakov <mac-cormick@yandex.ru>
 */
interface ParserInterface
{
    /**
     * @param string $url
     * $param string $tag
     * @return array
     */
    public function process(string $url, string $tag): array;
}