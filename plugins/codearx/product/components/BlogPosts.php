<?php
namespace Codearx\Product\Components;

use Response;

class BlogPosts extends \Cms\Classes\ComponentBase
{
   public function init()
   {
       # code...
   }

   public function onRun()
   {
        // if (true) {
        //     return Response::make('Access denied!', 403);
        // }
        // if (true) {
        //     $this->setStatusCode(404);
        //     return $this->controller->run('404');
        // }
   }

   public function componentDetails()
   {
       return [
           'name' => 'Blog Posts',
           'description' => 'Displays a collection of blog posts'
       ];
   }

   public function defineProperties()
   {
       return [
            'maxItems' => [
                'title'             => 'Max items',
                'description'       => 'The most amount of todo items allowed',
                'default'           => 10,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Items property can contain only numeric symbols'
            ],
            'units' => [
                'title'       => 'Units',
                'description' => 'Could be used!!',
                'type'        => 'dropdown',
                'default'     => 'imperial',
                'placeholder' => 'Select units',
                'options'     => ['metric'=>'Metric', 'imperial'=>'Imperial']
            ],
            'country' => [
                'title'   => 'Country',
                'description' => 'Could be used!!',
                'type'    => 'dropdown',
                'default' => 'us',
                'placeholder' => 'Select country',
            ]
        ];
   }

   public function getCountryOptions()
   {
       return ['us'=>'United states', 'ca'=>'Canada'];
   }

   public function Posts()
   {
       return [
            'First Post',
            'Second Post',
            'Third Post'
       ];
   }
}