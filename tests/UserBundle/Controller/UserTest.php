<?php

namespace Tests\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @group UserBundle
 */
class UserTest extends WebTestCase 
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/user');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('User!', $crawler->text());
    }
    
    public function testGreeting()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/user/mr%20potato');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Hello, mr potato!', $crawler->text());
    }
}
