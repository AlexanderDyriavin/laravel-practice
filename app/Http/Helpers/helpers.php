<?php
function formatAction(string $controller,string $method = 'index') : string
{
    return "${controller}@${method}";
}
