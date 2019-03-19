<?php

return array(
    'search'=>'search/search',
    'my-account'=>'myaccount/enter',
    'account'=>'account/authorization',
    'cart/remove/([0-9]+)'=>'cart/remove/$1',
    'cart/price'=>'cart/price',
    'cart/add/([0-9]+)'=>'cart/add/$1',
    'cart'=>'cart/view',
    'product/view/([0-9]+)'=>'catalog/modal/$1',
    'category/([0-9]+)' => 'catalog/category/$1',
    '' => 'home/index'
);
