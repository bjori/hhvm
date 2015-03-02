<?php

class MyInfoObject extends SplFileInfo {}

$info = new SplFileInfo(__FILE__);

$info->setInfoClass('MyInfoObject');
echo get_class($info->getFileInfo()), "\n";

$info->setInfoClass('SplFileInfo');
echo get_class($info->getFileInfo()), "\n";
