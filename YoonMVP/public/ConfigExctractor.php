<?php
namespace Yoon\YoonPublic;

use Yoon\YoonMvp\Configuration;
use Ramsey\Uuid\Uuid;

require_once('config_neu_TEST.inc.php');

class ConfigExctractor implements Configuration
{
    function getDatabaseConnectionString(string $access) : string
    {
        $user = $config['database'][$access][1]['user'];
        $password = $config['database'][$access][1]['pass'];
        $server = $config['database'][$access][1]['host'];
        $schema = $config['database'][$access][1]['daba'];
        return 'mysql://'.$user.':'.$password.'@'.$server.'/'.$schema;
        
    }
}