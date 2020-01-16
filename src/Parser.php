<?php

namespace Soldierm\Ndjson;

final class Parser
{
    /**
     * ndjson分隔符
     *
     * @var string
     */
    public const SEPARATOR = PHP_EOL;

    /**
     * 解析ndjson成数组
     *
     * @param string $ndjson
     * @return array
     */
    public static function decode(string $ndjson): array
    {
        return array_map(function ($json) {
            return json_decode($json, true);
        }, self::split($ndjson));
    }

    /**
     * 数组编码成ndjson
     *
     * @param array $data
     * @return string
     */
    public static function encode(array $data): string
    {
        $ndjson = '';
        array_walk($data, function ($item) use (&$ndjson) {
            $ndjson .= json_encode($item) . self::SEPARATOR;
        });
        return $ndjson;
    }

    /**
     * 将ndjson字符串转成数组
     *
     * @param string $ndjson
     * @return array
     */
    private static function split(string $ndjson)
    {
        return explode(self::SEPARATOR, $ndjson);
    }
}
