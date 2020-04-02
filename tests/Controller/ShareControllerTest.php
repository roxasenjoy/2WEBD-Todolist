<?php

namespace App\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ShareControllerTest extends WebTestCase
{
    public function testIndex(){
        $client = static::createClient();
        $client->request('GET', '/share');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}