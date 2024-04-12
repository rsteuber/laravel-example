<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/rsteuber/laravel-example.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('68.183.5.65')
    ->set('remote_user', 'rsteuber')
    ->set('deploy_path', '/home/rsteuber/applications/laravel-example/public_html');

// Hooks

after('deploy:failed', 'deploy:unlock');
