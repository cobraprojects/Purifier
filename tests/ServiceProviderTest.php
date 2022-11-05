<?php

namespace Cobraprojects\Tests\Purifier;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Cobraprojects\Purifier\Purifier;

class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testPurifierIsInjectable()
    {
        $this->assertIsInjectable(Purifier::class);
    }
}