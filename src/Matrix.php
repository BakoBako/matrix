<?php

declare(strict_types=1);

namespace Bako\Matrix;

interface Matrix
{
    /**
     * Sum two matrices
     *
     * @param Matrix $addend
     * @return Matrix
     */
    public function sum(Matrix $addend) : Matrix;
}