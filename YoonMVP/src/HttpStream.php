<?php

namespace Yoon\YoonMvp;

class BasicFile extends Hoa\Stream\Stream
{
    protected function &_open($streamName, Hoa\Stream\Context $context = null)
    {
        if (null === $context) {
            $out = fopen($streamName, 'rb');
        } else {
            $out = fopen($streamName, 'rb', false, $context->getContext());
        }

        return $out;
    }

    protected function _close()
    {
        return fclose($this->getStream());
    }
}


?>