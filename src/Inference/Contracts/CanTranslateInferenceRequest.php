<?php declare(strict_types=1);

namespace Cognesy\Polyglot\Inference\Contracts;

use Cognesy\Http\Data\HttpRequest;
use Cognesy\Polyglot\Inference\Data\InferenceRequest;

interface CanTranslateInferenceRequest
{
    public function toHttpRequest(InferenceRequest $request) : HttpRequest;
}
