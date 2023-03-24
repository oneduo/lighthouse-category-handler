<?php

declare(strict_types=1);

namespace Oneduo\LighthouseCategoryHandler;

use GraphQL\Error\Error;
use Nuwave\Lighthouse\Exceptions\AuthenticationException;
use Nuwave\Lighthouse\Exceptions\AuthorizationException;
use Nuwave\Lighthouse\Exceptions\RateLimitException;
use Nuwave\Lighthouse\Exceptions\ValidationException;
use Nuwave\Lighthouse\Execution\ErrorHandler;

final class CategoryHandler implements ErrorHandler
{
    public function __invoke(?Error $error, \Closure $next): ?array
    {
        if ($error === null) {
            return $next(null);
        }

        $underlyingException = $error->getPrevious();

        $class = $underlyingException !== null ? $underlyingException::class : null;

        $category = match($class) {
            AuthenticationException::class => 'authentication',
            AuthorizationException::class => 'authorization',
            RateLimitException::class => 'rate-limit',
            ValidationException::class => 'validation',
            default => 'graphql',
        };

        $newError = new Error(
            $error->getMessage(),
            $error->getNodes(),
            $error->getSource(),
            $error->getPositions(),
            $error->getPath(),
            $error->getPrevious(),
            [
                'category' => $category,
                ...($error->getExtensions() ?? []),
            ],
        );

        return $next($newError);
    }
}
