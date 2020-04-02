<?php

namespace App\Tests\Controller;

use App\Repository\UserRepository;
use App\Tests\NeedLogin;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TasksControllerTest extends WebTestCase
{
    use NeedLogin; //Acces methode

    public function testIndex(){
        $client = static::createClient();

        $user = self::$container->get(UserRepository::class)->findAll()[0];
        $this->login($user, $client, self::$container->get('session'));
        $client->request('GET', '/dashboard/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testNewGet(){
        $client = static::createClient();

        $user = self::$container->get(UserRepository::class)->findAll()[0];
        $this->login($user, $client, self::$container->get('session'));
        $client->request('GET', '/dashboard/new');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testNewPost(){
        $client = static::createClient();

        $user = self::$container->get(UserRepository::class)->findAll()[0];
        $this->login($user, $client, self::$container->get('session'));
        $client->request('POST', '/dashboard/new', ['title' => "Faire un PHPUnit", 'status' => "Urgent"]);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }





}