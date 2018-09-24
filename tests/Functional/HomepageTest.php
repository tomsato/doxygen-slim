<?php
namespace Tests\Functional;

class HomepageTest extends \Tests\Functional\BaseTestCase
{
    public function testGetHomepageWithoutName()
    {
        $response = $this->runApp('GET', '/');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertContains('testtttt', (string)$response->getBody());
    }
}
