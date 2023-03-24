<?php

declare(strict_types=1);

namespace Oneduo\LighthouseCategoryHandler\Testing;

use Closure;

/**
 * @mixin \Illuminate\Testing\TestResponse
 */
class TestResponseMixin
{
    public function assertGraphQLErrorCategory(): Closure
    {
        return function (string $category) {
            $this->assertJson([
                'errors' => [
                    [
                        'extensions' => [
                            'category' => $category,
                        ],
                    ],
                ],
            ]);

            return $this;
        };
    }
}
