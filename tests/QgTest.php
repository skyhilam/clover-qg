<?php

namespace Clover\Qg\Tests;

use Clover\Qg\Facades\Qg;
use Clover\Qg\ServiceProvider;
use Orchestra\Testbench\TestCase;

class QgTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'qg' => Qg::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
