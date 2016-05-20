<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-bootstrap-switch')
                            ->usePackage('larakit/sf-bootstrap')
                            ->js('//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js')
                            ->css('//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/css/bootstrap3/bootstrap-switch.min.css');
if(class_exists('\Larakit\Page\PageDnsPrefetch')){
    \Larakit\Page\PageDnsPrefetch::register('//cdnjs.cloudflare.com');
}
