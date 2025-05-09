<?php

namespace Cognesy\Polyglot\LLM\Contracts;

use Cognesy\Polyglot\LLM\Enums\OutputMode;

interface CanMapRequestBody
{
    public function map(
        array $messages,
        string $model,
        array $tools,
        array|string $toolChoice,
        array $responseFormat,
        array $options,
        OutputMode $mode
    ): array;
}