<?php

declare(strict_types=1);

namespace Oneduo\LighthouseCategoryHandler\Testing;
use Illuminate\Support\ServiceProvider;

class TestingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        if (class_exists('Illuminate\Testing\TestResponse')) {
            \Illuminate\Testing\TestResponse::mixin(new TestResponseMixin());
        } elseif (class_exists('Illuminate\Foundation\Testing\TestResponse')) {
            \Illuminate\Foundation\Testing\TestResponse::mixin(new TestResponseMixin());
        }
    }
}
