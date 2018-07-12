<?php 

namespace Yoon\YoonMvp;

interface Configuration 
{
   function getDatabaseConnectionString(string $access) : string;
}