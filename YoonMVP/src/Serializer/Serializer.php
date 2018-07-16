<?php

namespace Yoon\YoonMvp\Serializer;

interface Serializer
{
    public function fromArray(array $data);
    public function toArray($object);
}
