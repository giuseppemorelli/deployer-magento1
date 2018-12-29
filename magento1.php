<?php
namespace Deployer;

require 'recipe/common.php';

set('magento_deploy_path', "{{deploy_path}}");

desc('Magento clean cache');
task('magento:clean-cache', function(){
    cd('{{magento_deploy_path}}');
    run('n98-magerun cache:clean');
});

desc('Magento flush cache');
task('magento:clear-cache', function(){
    cd('{{magento_deploy_path}}');
    run('n98-magerun cache:flush');
});