<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

abstract class AppTestCase extends WebTestCase
{
    /** @var ContainerInterface */
    private $container;

    public function setUp(): void
    {
        parent::setUp();
        self::bootKernel();
        $this->container = self::$container;
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public function getContainer(): ContainerInterface
    {
        return $this->container;
    }
}
