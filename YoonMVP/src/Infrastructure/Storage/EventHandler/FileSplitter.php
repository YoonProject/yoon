<?php

namespace Yoon\YoonMvp\Command\Handler;

use Yoon\YoonMvp\Domain\Command\MakeUpload;
use Yoon\YoonMvp\Domain\Event\UploadAttemptCreated;
use Yoon\YoonMvp\Domain\Aggregate\Upload;
use Yoon\YoonMvp\Handler;
use Yoon\YoonMvp\Message;
use Yoon\YoonMvp\MessageBus;
use Yoon\YoonMvp\ProcessManager;
use Yoon\YoonMvp\ChainRepository;
use Yoon\YoonMvp\ErrorLog\ErrorLogException;
use Yoon\YoonMvp\ErrorLog\ErrorLogType;
use Ramsey\Uuid\Uuid;
use GuzzleHttp\Promise\Promise;


/**
 * Handles the make upload command for generating a blockchain based upload.
 *
 */
class FileSplitter
{

}

?>