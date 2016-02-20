<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @group AppBundle
 */
class HomeTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('Home page :D', $crawler->text());
    }
    
    public function testNonAcceptedHttpMethod()
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/');

        $this->assertEquals(405, $client->getResponse()->getStatusCode());
        $this->assertContains('No route found for "POST /"', $crawler->text());
        $this->assertContains('Method Not Allowed (Allow: GET, HEAD)', $crawler->text());
    }
}
