<?php 

namespace Yoon\YoonPublic;
use Yoon\YoonMvp\Configuration;

require_once 'config_neu.inc.php';

class ConfigExtractor implements Configuration 
{
    function getDatabaseConnectionString(string $access) : string
    {
        return 'mysql://'.$config['database'][$access][1]['user'].':'.
                $config['database'][$access][1]['pass'].'@'.$config['database'][$access][1]['host'].
                '/'.$config['database'][$access][1]['daba'];
    }
}




?>