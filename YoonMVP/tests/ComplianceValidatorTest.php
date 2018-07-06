<?php
namespace Yoon\YoonMvp\Test;

use Yoon\YoonMvp\ComplianceValidator;
use PHPUnit\Framework\TestCase;


class ComplianceValidatorTest extends TestCase
{
    public $numErrors = 0;

    public function testValidate_WithIncorrectBin_ReturnsIncorrectBin()
    {
        $paths = [
            'cli/',
            'src/',
        ];

        $validator = new ComplianceValidator();
        $results = $validator->validate($paths);

        foreach ($results as $expected => $result) {
            if ($expected == "bin/") {
                if ($result['state'] != ComplianceValidator::STATE_INCORRECT_PRESENT) {
                    $this->numErrors++;
                    echo __FUNCTION__ . ": Expected state of {$result['expected']} to be STATE_INCORRECT_PRESENT" . PHP_EOL;
                }
                continue;
            }
            if ($expected == "src/") {
                if ($result['state'] != ComplianceValidator::STATE_CORRECT_PRESENT) {
                    $this->numErrors++;
                    echo __FUNCTION__ . ": Expected state of {$result['expected']} to be STATE_CORRECT_PRESENT" . PHP_EOL;
                }
                continue;
            }
            if ($expected == "LICENSE") {
                if ($result['state'] != ComplianceValidator::STATE_RECOMMENDED_NOT_PRESENT) {
                    $this->numErrors++;
                    echo __FUNCTION__ . ": Expected state of {$result['expected']} to be STATE_RECOMMENDED_NOT_PRESENT" . PHP_EOL;
                }
                continue;
            }
            if ($result['state'] != ComplianceValidator::STATE_OPTIONAL_NOT_PRESENT) {
                $this->numErrors++;
                echo __FUNCTION__ . ": Expected state of {$result['expected']} to be STATE_OPTIONAL_NOT_PRESENT" . PHP_EOL;
                continue;
            }
        }
        $this->assertEquals($this->numErrors, 0);
    }

    public function testValidate_WithNonCompliance_SetsNonCompliantState()
    {
        $paths = [
            'cli/',
            'test/',
        ];

        $validator = new ComplianceValidator();
        $results = $validator->validate($paths);

        if ($validator->getCompliant() == true) {
            $this->numErrors++;
            echo __FUNCTION__ . ": Expected a non compliant state" . PHP_EOL;
        }

        $this->assertEquals($this->numErrors, 0);
    }

    public function testValidate_WithCompliance_SetsCompliantState()
    {
        $paths = [
            'bin/',
            'tests/',
            'LICENSE.md',
        ];

        $validator = new ComplianceValidator();
        $results = $validator->validate($paths);

        if ($validator->getCompliant() == false) {
            $this->numErrors++;
            echo __FUNCTION__ . ": Expected a compliant state" . PHP_EOL;
        }

        $this->assertEquals($this->numErrors, 0);
    }
}
