<?php

namespace Liip\TestFixturesBundle\Services;

use Doctrine\Bundle\FixturesBundle\Loader\SymfonyFixturesLoader;
use Doctrine\Common\DataFixtures\Loader;

final class SymfonyFixturesLoaderWrapper extends Loader
{
    private $symfonyFixturesLoader;

    public function __construct(SymfonyFixturesLoader $symfonyFixturesLoader)
    {
        $this->symfonyFixturesLoader = $symfonyFixturesLoader;
    }

    public function loadFixturesClass($className)
    {
        $this->addFixture($this->symfonyFixturesLoader->getFixture($className));
    }

    public function createFixture($class)
    {
        return $this->symfonyFixturesLoader->getFixture($class);
    }
}
