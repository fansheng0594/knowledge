<?php

use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

function dddd($variable, $depth = -1, $stringLength = 20)
{
    $cloner = new VarCloner();
    $cloner->setMaxString($stringLength);

    $dumper = 'cli' === PHP_SAPI ? new CliDumper() : new HtmlDumper();
    $dumper->dump($cloner->cloneVar($variable)->withMaxDepth($depth));

    die(1);
}
