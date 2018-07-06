<?php
namespace Yoon\YoonMvp\Test;

use PHPUnit\Framework\TestCase;
use Yoon\YoonMvp\ComplianceValidator;
use Yoon\YoonMvp\PackageGenerator;

class PackageGeneratorTest extends TestCase
{
    public $numErrors = 0;

    public function testGenerate_WithMissingBin_ReturnsBin()
    {
        $validatorResults = [
            'bin/' => [
                'state' => ComplianceValidator::STATE_OPTIONAL_NOT_PRESENT,
                'expected' => 'bin/',
            ],
            'config/' => [
                'state' => ComplianceValidator::STATE_INCORRECT_PRESENT,
                'expected' => 'config/',
            ],
        ];

        $generator = new PackageGenerator();
        $files = $generator->createFileList($validatorResults);

        if (!array_key_exists('bin/', $files)) {
            $this->numErrors++;
                echo __FUNCTION__ . ": Expected bin/ to be present" . PHP_EOL;
        }

        if (array_key_exists('config/', $files)) {
            $this->numErrors++;
                echo __FUNCTION__ . ": Expected config/ to be absent" . PHP_EOL;
        }

        $this->assertEquals($this->numErrors, 0);
    }
}