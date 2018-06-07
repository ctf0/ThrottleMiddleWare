<?php

namespace App\Http\Middleware;

use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Http\Exceptions\ThrottleRequestsException;

class Throttle extends ThrottleRequests
{
    protected function buildException($key, $maxAttempts)
    {
        $retryAfter = $this->getTimeUntilNextRetry($key);

        $headers = $this->getHeaders(
            $maxAttempts,
            $this->calculateRemainingAttempts($key, $maxAttempts, $retryAfter),
            $retryAfter
        );

        return new ThrottleRequestsException(
            trans('auth.throttle', ['seconds'=>$retryAfter]), null, $headers
        );
    }
}
