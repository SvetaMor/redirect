# redirect
redirect 301 in Yii2

В \config\main.php или web.php прописать класс RedirectComponent в компонентах и бутстрапе и зависимости в контейнер:

    'bootstrap' => ['RedirectComponent','log'],
    'container' => [
        'definitions' => [
            \frontend\vendor\svetamor\redirect\interfaces\AbstractArray::class => [
                'class' => \frontend\vendor\svetamor\redirect\ArrayBd::class,
                'filePath' => 'redirect',
            ],
            /*\frontend\vendor\svetamor\redirect\interfaces\AbstractArray::class => [
                'class' => \frontend\vendor\svetamor\redirect\ArrayCsv::class,
                'filePath' => '/files/redirect.csv',
             ],*/
            \frontend\vendor\svetamor\redirect\interfaces\IGettingUrl::class => \frontend\vendor\svetamor\redirect\GettingUrl::class,
            \frontend\vendor\svetamor\redirect\interfaces\IRedirect::class => \frontend\vendor\svetamor\redirect\Redirect::class,
        ],
    ],
    'components' => [
        ...
        'RedirectComponent' => [
            'class'=>'frontend\vendor\svetamor\redirect-package\src\RedirectComponent',
        ],   
  