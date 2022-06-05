<?php

namespace App\Tests\Func;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeTest extends WebTestCase
{
    public function testVerifyUrl()
    {

        $client = static::createClient();

        $client->request('GET', '/');

        // Validate a successful response and some content
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Hello World');
    }
}