<?php

class heatbit_plugin{
    var $domain, $uri, $dir, $textdomain, $file, $version;

    function __construct($file, array $args = array())
    {
        //get the plugins files
        $this->file = $file;

        //get the plugin uri
        $this->uri = plugin_dir_url($file);

        //get the plugin dir
        $this->dir = plugin_dir_path($file);

        // set the domain and text domain based on class name
        $this->textdomain = $this->domain = basename($file, '.php');

        //plugin data to retrieve
        $plugin_data_fields = array(
            'name' => 'Plugin name',
            'pluginuri' => 'Plugin URI',
            'version' => 'Version',
            'descriptions' => 'Description',
            'author' => 'Author',
            'authoruri' => 'Author URI',
            'textdomain' => 'Text Domain'
        );

    }


}
