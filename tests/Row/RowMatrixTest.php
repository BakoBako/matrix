<?php

declare(strict_types=1);

namespace Bako\Matrix\Tests;

use Bako\Matrix\Matrix;
use Bako\Matrix\Row\RowMatrix;
use Bako\Matrix\Row\RowMatrixInterface;
use PHPUnit\Framework\TestCase;

/**
 * Tests for row matrix.
 */
class RowMatrixTest extends TestCase
{
    public function testIsMatrix()
    {
        $this->assertInstanceOf(Matrix::class, new RowMatrix);
    }

    public function testIsRowMatrix()
    {
        $this->assertInstanceOf(RowMatrixInterface::class, new RowMatrix);
    }
}
