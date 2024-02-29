<?php return array(
    'root' => array(
        'name' => 'fullworks/stop-wp-emails-going-to-spam',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'aee058e3f7152ba1dd4f58b912b3252a0143b4a8',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'alanef/plugindonation_lib' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'a265d21d2f486661eb5e852309a76e100317f1c5',
            'type' => 'library',
            'install_path' => __DIR__ . '/../alanef/plugindonation_lib',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'composer/installers' => array(
            'pretty_version' => 'v1.0.12',
            'version' => '1.0.12.0',
            'reference' => '4127333b03e8b4c08d081958548aae5419d1a2fa',
            'type' => 'composer-installer',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'fullworks/stop-wp-emails-going-to-spam' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'aee058e3f7152ba1dd4f58b912b3252a0143b4a8',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
