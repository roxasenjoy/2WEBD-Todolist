<?php

namespace App\Tests\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Tests\NeedLogin;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InvitationsControllerTest extends WebTestCase
{
    use NeedLogin; //Acces methode

    public function testIndex(){
        $client = static::createClient();
        $user = self::$container->get(UserRepository::class)->findAll()[0];

        $this->login($user, $client, self::$container->get('session'));
        $client->request('GET', '/amis/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testNewGet(){
        $client = static::createClient();
        $user = self::$container->get(UserRepository::class)->findAll()[0];

        $this->login($user, $client, self::$container->get('session'));
        $client->request('GET', '/amis/new');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testNewPost(){
        $client = static::createClient();
        $user = self::$container->get(UserRepository::class)->findAll()[0];

        $this->login($user, $client, self::$container->get('session'));
        $client->request('POST', '/amis/new', ['accepted_invitation' => true, 'user' => self::$container->get(UserRepository::class)->findAll()[0]]);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }



}