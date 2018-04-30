<?php

$variableName = 5;
$variableName = "f t 5";
$variableName = <<<EOT
    Hello heredoc $variableName
EOT;

$variableName = <<<'EOD'
    Hello nowdoc
EOD;


echo ($variableName);
