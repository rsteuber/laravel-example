<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/rsteuber/laravel-example.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('161.35.157.190')
    ->set('remote_user', 'rsteuber')
    ->set('deploy_path', '/var/www/test.top-feest.nl');

// Hooks

after('deploy:failed', 'deploy:unlock');
