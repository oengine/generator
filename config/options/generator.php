<?php

use OEngine\Core\Builder\Form\FieldBuilder;
use OEngine\Core\Facades\GateConfig;

return GateConfig::Option('Generator')->Disable()->setSort(1)->setFields([]);
