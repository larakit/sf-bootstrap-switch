# larakit/sf-bootstrap-switch

### Установка пакета 
~~~bash
composer require larakit/sf-bootstrap-switch
~~~
Ничего дополнительно инициализировать не надо, добавив этот пакет в зависимости в composer.json, он сам установится и пропишется на всех страницах автоматически.

### Отключение пакета на некоторых роутах
В файле  ./app/Http/staticfiles.php добавьте
~~~php
\Larakit\StaticFiles\Manager::package('larakit/sf-bootstrap-switch')
    ->addExclude('home')
    ->addExclude('admin.*');
~~~    
тогда пакет не будет включен на главной странице и на всех страницах админки.

### Изменение состава подключаемой статики пакета
Если вы использовали какой-то пакет, который за собой потянул этот пакет, но вас не устраивает версия библиотеки, подключаемая по умолчанию (например не хотите использовать CDN, а хотите отдавать со своего сайта), то вместо базового способа инициализации пакета
~~~php
\Larakit\StaticFiles\Manager::package('larakit/sf-bootstrap-switch')
    ->js('//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js')
    ->css('//cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/css/bootstrap3/bootstrap-switch.min.css');
~~~
вы можете переопределить его, вызвав инициализацию пакета еще раз
~~~php
\Larakit\StaticFiles\Manager::package('larakit/sf-bootstrap-switch')
  //очистить список подключенных JS и CSS
  ->clearJs()
  ->clearCss()
  //добавить свои
  ->js('/bootstrap-switch.min.js')
  ->css('/bootstrap-switch.min.css');
~~~