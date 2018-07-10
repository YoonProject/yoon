<?php

namespace Yoon\YoonMvp\Domain;


abstract class FileOperationType
{
    const Create = 0;
    const Update = 1;
    const Delete = 2;
    const ChangeOwnership = 3; 
}
?>