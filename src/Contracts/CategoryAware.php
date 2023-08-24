<?php

declare(strict_types=1);

namespace Oneduo\LighthouseCategoryHandler\Contracts;

interface CategoryAware 
{
    public function category(): string;
}
