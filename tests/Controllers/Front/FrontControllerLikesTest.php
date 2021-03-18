<?php
/*
|--------------------------------------------------------
| copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------
*/
namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Tests\RoleUser;

class FrontControllerLikesTest extends WebTestCase
{
    use RoleUser;

    public function testLike()
    {

        $this->client->request('POST', '/video-list/11/like');
        $crawler = $this->client->request('GET', '/video-list/category/movies,4');

        $this->assertSame('(3)', $crawler->filter('small.number-of-likes-11')->text());
    }

    public function testDislike()
    {

        $this->client->request('POST', '/video-list/11/dislike');
        $crawler = $this->client->request('GET', '/video-list/category/movies,4');

        $this->assertSame('(1)', $crawler->filter('small.number-of-dislikes-11')->text());
    }
}

