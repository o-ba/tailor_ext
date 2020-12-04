<?php

declare(strict_types=1);

namespace Bo\TailorExt;

class Tailor
{
    protected string $name = 'tailor';

    public function getName(): string
    {
        return $this->name;
    }
}
