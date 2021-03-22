<?php
/*
|-----------------------------------------------------------
| available only at Udemy.com | copyright netprogs.pl | further distribution is prohibited
|-----------------------------------------------------------
*/
namespace App\Utils;

use App\Utils\Interfaces\CacheInterface;

use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Adapter\TagAwareAdapter;

class FilesCache implements CacheInterface {

    public $cache;
    public function __construct()
    {
        $this->cache =  new TagAwareAdapter(
        new FilesystemAdapter()
        );
    }
}
