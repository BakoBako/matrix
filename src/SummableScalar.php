<?php

declare(strict_types=1);

namespace Bako\Matrix;

interface SummableScalar
{
    /**
     * Sum matrix with scalar integer value
     *
     * @param int $addend
     * @return Matrix
     */
    public function sumScalarInteger(int $addend) : Matrix;

    /**
     * Sum matrix with scalar float value
     *
     * @param float $addend
     * @return Matrix
     */
    public function sumScalarFloat(float $addend) : Matrix;
}