<?php

echo \mix\helpers\JsonHelper::encode(compact('code', 'message', 'type', 'file', 'line', 'trace'));
