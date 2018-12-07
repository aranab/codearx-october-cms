<?php namespace Codearx\Product;

/**
 * The plugin.php file (called the plugin initialization script) defines the plugin information class.
 */

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Codearx Product',
            'description' => 'All products are managed here!!',
            'author'      => 'Md. Arafat Rahman Rana',
            'icon'        => 'icon-product-hunt',
            'homepage'    => 'http://skarafat.com'
        ];
    }

    public function registerComponents()
    {
        return [
            '\Codearx\Product\Components\BlogPosts' => 'demoBlogPosts'
        ];
    }
}