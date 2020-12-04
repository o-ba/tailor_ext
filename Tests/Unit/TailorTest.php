<?php

declare(strict_types=1);

namespace Bo\TailorExt\Tests\Unit;

use Bo\TailorExt\Tailor;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

class TailorTest extends UnitTestCase
{
    /**
     * @test
     */
    public function getExtensionKeyTest(): void
    {
        self::assertEquals('tailor', (new Tailor())->getName());
    }
}
