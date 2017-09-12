<?php
namespace Festival;

use Mustache_Engine;
use Mustache_Loader_FilesystemLoader;

return new Mustache_Engine(array(
   'loader' => new Mustache_Loader_FilesystemLoader(get_template_directory() . '/templates')
));
