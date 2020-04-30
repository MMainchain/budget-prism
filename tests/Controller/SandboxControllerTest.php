<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SandboxControllerTest extends AbstractControllerTest
{
    const ENDPOINT = '/sandbox';

    /** @test */
    public function itShouldReturn200(): void
    {
        $client = self::createClient();

        $client->request(Request::METHOD_GET, self::ENDPOINT);

        $this->assertEquals(Response::HTTP_OK, $client->getResponse()->getStatusCode());
    }
}
