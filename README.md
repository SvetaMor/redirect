# redirect
redirect 301 in Yii2

В \config\main.php прописать класс RedirectComponent в компонентах и бутстрапе:
return [
    ...
    'bootstrap' => ['RedirectComponent','log'],
    ...
    'components' => [
        'RedirectComponent' => [
            'class'=>'frontend\components\RedirectComponent',
        ],   
    ],
    ...
]; 