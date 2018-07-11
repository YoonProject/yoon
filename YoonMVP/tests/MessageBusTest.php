<?php
namespace Yoon\YoonMvp\Test;

use Yoon\YoonMvp\Message;
use Yoon\YoonMvp\Handler;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class MessageBusTest extends BaseTest
{
    private $container;


    /**
     * Put your temp image into your filesystem.
     * (Not good as unit tests must work with any system,
     * but my research about mocking resources gave me nothing)
     */
    protected function setUp()
    {
        parent::setUp();
    }


    public function testMessageBus__publish__succeeds()
    {
        $message = Phake::mock(Message::class);
        $handler = Phake::mock(Handler::class);
        $id = new Uuid();
        $handler = MakeUploadCommandHandler::class.MakeUpload::class;
        $commandHandler = $this->handler;
        $command = new MakeUpload($id, $userId, '/', $fileName);
        $commandHandler->getHandle()->resolve();

        $this->assertEquals($this->numErrors, 0);
    }

        /**
     * Deleting of test images. No try/catch here as it would fire on setup
     */
    protected function tearDown()
    {
        
    }
}