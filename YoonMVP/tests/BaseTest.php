<?php
namespace Yoon\YoonMvp\Test;

use Yoon\YoonMvp\Domain\Command\MakeUpload;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

abstract class BaseTest extends TestCase
{
    public $numErrors = 0;

    private $container;


    /**
     * Put your temp image into your filesystem.
     * (Not good as unit tests must work with any system,
     * but my research about mocking resources gave me nothing)
     */
    protected function setUp()
    {
        $builder = new \DI\ContainerBuilder();
        $builder->useAnnotations(true);
        $builder->ignorePhpDocErrors(true);
        $builder->addDefinitions('src/DependencyConfig.php');
        $container = $builder->build();
        $container->injectOn($this);
        require_once('Phake.php');
        Phake::setClient(Phake::CLIENT_PHPUNIT);
        require_once('Phake/ClassGenerator/FileLoader.php');
        Phake::setMockLoader(new Phake_ClassGenerator_FileLoader('/tmp'));
        parent::setUp();
    }

    /**
     * Basic tear down.
     */
    protected function tearDown()
    {
        $this->container = null;
        parent::tearDown();   
    }
}