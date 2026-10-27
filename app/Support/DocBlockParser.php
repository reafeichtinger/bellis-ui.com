<?php

namespace App\Support;

use ReflectionClass;
use ReflectionException;

class DocBlockParser
{
    /**
     * Parses a class docblock to extract description and @property tags.
     *
     * @param  string  $className  The FQCN of the class
     *
     * @throws ReflectionException
     */
    public static function parseClassDocBlock(string $className): array
    {
        $reflection = new ReflectionClass($className);
        $docComment = $reflection->getDocComment();

        if (!$docComment) {
            return [
                'description' => '',
                'properties' => [],
            ];
        }

        // 1. Clean the docblock: Remove the /** and */ and leading asterisks
        $cleanDoc = preg_replace('/^(\/\*\*|\*\/)/m', '', $docComment);
        $lines = explode("\n", $cleanDoc);
        $cleanLines = [];
        foreach ($lines as $line) {
            // Remove the leading '*' and whitespace
            $cleanLine = preg_replace('/^\s*\*\s?/', '', $line);
            $cleanLines[] = $cleanLine;
        }
        $cleanDoc = implode("\n", $cleanLines);

        // 2. Extract Description
        $description = '';
        if (preg_match('/^(.*?)(?=@)/s', $cleanDoc, $matches)) {
            $description = trim($matches[1]);
        }

        // 3. Extract @property tags
        $properties = [];

        /**
         * Pattern explanation:
         *
         * @property\s+      -> Matches @property followed by whitespace
         * ([^\s]+)         -> Capture Group 1: The Type (e.g., ?string)
         * \s+\$?           -> Space followed by an optional $
         * ([^\s]+)         -> Capture Group 2: The Name (e.g., id)
         * \s+              -> Space
         * (.*)             -> Capture Group 3: The Description
         */
        $pattern = '/@property\s+([^\s]+)\s+\$?([^\s]+)\s+(.*)/';

        if (preg_match_all($pattern, $cleanDoc, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $properties[] = [
                    'name' => trim($match[2]),
                    'type' => trim($match[1]),
                    'description' => trim($match[3]),
                ];
            }
        }

        return [
            'description' => $description,
            'properties' => $properties,
        ];
    }
}
