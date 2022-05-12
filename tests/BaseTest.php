<?php

namespace Kuber\Tests;

use PHPUnit\Framework\TestCase;

abstract class BaseTest extends TestCase
{
    protected $vume;

    public function __construct()
    {
        parent::__construct();
    }

    public function setUp(): void
    {
        parent::setUp();
    }
}
