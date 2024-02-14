<?php

namespace app\components;

use app\components\Constants as C;
use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class MenuHelper
{

    public static $menu = [
        "dashboard" => [
            "config" => ["class" => "nav-icon fas fa-home"],
            "items" => [
                'dashboard' => [
                    ['module' => '', 'controller' => 'site', 'action' => 'index', 'label' => 'Dashboard', 'is_menu' => true, 'icon' => "icon icon ion-ios-photos-outline"],
                ]
            ]
        ],
        "configuration" => [
            "config" => ["class" => "nav-icon fas fa-wrench"],
            "items" => [
                'vendor' => [
                    ['module' => '', 'controller' => 'device', 'action' => 'vendor', 'label' => 'Vendor', 'is_menu' => true, 'icon' => "icon icon ion-ios-photos-outline"],
                    ['module' => '', 'controller' => 'device', 'action' => 'add-vendor', 'label' => 'Add Vendor', 'is_menu' => false, 'icon' => "icon icon ion-ios-photos-outline"],
                    ['module' => '', 'controller' => 'device', 'action' => 'edit-vendor', 'label' => 'Edit Vendor', 'is_menu' => false, 'icon' => "icon icon ion-ios-photos-outline"],
                ],
                'categories' => [
                    ['module' => '', 'controller' => 'device', 'action' => 'category', 'label' => 'Categories', 'is_menu' => true, 'icon' => "icon icon ion-ios-photos-outline"],
                    ['module' => '', 'controller' => 'device', 'action' => 'add-category', 'label' => 'Add Categories', 'is_menu' => false, 'icon' => "icon icon ion-ios-photos-outline"],
                    ['module' => '', 'controller' => 'device', 'action' => 'edit-category', 'label' => 'Edit Categories', 'is_menu' => false, 'icon' => "icon icon ion-ios-photos-outline"],
                ],
                'brand' => [
                    ['module' => '', 'controller' => 'device', 'action' => 'brand', 'label' => 'Brand', 'is_menu' => true, 'icon' => "icon icon ion-ios-photos-outline"],
                    ['module' => '', 'controller' => 'device', 'action' => 'add-brand', 'label' => 'Add Brand', 'is_menu' => false, 'icon' => "icon icon ion-ios-photos-outline"],
                    ['module' => '', 'controller' => 'device', 'action' => 'edit-brand', 'label' => 'Edit Brand', 'is_menu' => false, 'icon' => "icon icon ion-ios-photos-outline"],
                ],
                'products' => [
                    ['module' => '', 'controller' => 'device', 'action' => 'products', 'label' => 'Products', 'is_menu' => true, 'icon' => "icon icon ion-ios-photos-outline"],
                    ['module' => '', 'controller' => 'device', 'action' => 'add-products', 'label' => 'Add Products', 'is_menu' => false, 'icon' => "icon icon ion-ios-photos-outline"],
                    ['module' => '', 'controller' => 'device', 'action' => 'edit-products', 'label' => 'Edit Products', 'is_menu' => false, 'icon' => "icon icon ion-ios-photos-outline"],
                ],
            ]
        ],
        "customer" => [
            "config" => ["class" => "nav-icon fas fa-wrench"],
            "items" => [
                'billing' => [
                    ['module' => '', 'controller' => 'bill', 'action' => 'billing', 'label' => 'Bill', 'is_menu' => true, 'icon' => "icon icon ion-ios-photos-outline"],
                    ['module' => '', 'controller' => 'bill', 'action' => 'add-billing', 'label' => 'Make Bill', 'is_menu' => false, 'icon' => "icon icon ion-ios-photos-outline"],
                    ['module' => '', 'controller' => 'bill', 'action' => 'edit-customer', 'label' => 'Edit Bill', 'is_menu' => false, 'icon' => "icon icon ion-ios-photos-outline"],
                    ['module' => '', 'controller' => 'bill', 'action' => 'make-payment', 'label' => 'Make Payment', 'is_menu' => false, 'icon' => "icon icon ion-ios-photos-outline"],
                ],
            ]
        ],
        "logout" => [
            "config" => ["class" => "nav-icon fas fa-sign-out-alt"],
            "items" => [
                "logout" => [
                    ['module' => '', 'controller' => 'site', 'action' => 'logout', 'label' => 'Logout', 'is_menu' => true, 'icon' => "icon icon ion-ios-photos-outline"]
                ],
            ]
        ]
    ];


    public static function getDisplayMenu($menu = [], $is_submenu = false)
    {
        $menu = empty($menu) ? self::$menu : $menu;
        $result = [];
        foreach ($menu as $key => $mvalues) {
            $menuItems = empty($mvalues['items']) ? $mvalues : $mvalues['items'];
            $menuConfig = empty($mvalues['config']) ? [] : $mvalues['config'];
            $is_submenu = count($menuItems) > 1 ? true : false;
            if (\yii\helpers\ArrayHelper::isAssociative($menuItems)) {
                foreach ($menuItems as $k => $m) {
                    if ($is_submenu) {
                        $label = self::styleMenuLabel($key, $menuConfig);
                        $arr = ArrayHelper::getColumn($m, 'controller');
                        $openMain = in_array(Yii::$app->controller->id, (array) $arr[0]) ? " menu-is-opening menu-open" : "";
                        $setActiveMain = in_array(Yii::$app->controller->id, (array) $arr[0]) ? "active" : "";
                        $result[$key] = [
                            'url' => "#",
                            'label' => $label,
                            'options' => ['class' => 'nav-item ' . $openMain],
                            'items' => array_values(self::getDisplayMenu($menuItems)),
                            'submenuTemplate' => "\n<ul class='nav nav-treeview'>\n{items}\n</ul>\n",
                            "template" => '<a href="{url}" class="nav-link ' . $setActiveMain . ' "><i class="nav-icon fas ' . $mvalues['config']['class'] . '"></i><p>{label}<i class="right fas fa-angle-left"></i> </p></a>'
                        ];
                    } else {
                        $mv = current($m);
                        $label = self::styleMenuLabel($mv['label'], $menuConfig);
                        $result[$k] = [
                            'url' => \Yii::$app->urlManager->createUrl(implode("/", [$mv['module'], $mv['controller'], $mv['action']])),
                            'label' => $label,
                            'options' => ['class' => 'nav-item cc' . (Yii::$app->controller->id == $mv['controller'] ? "menu-open" : "")],
                            "template" => '<a href="{url}" class="nav-link ' . (Yii::$app->controller->id == $mv['controller'] ? "active" : "") . '"><i class="' . $mvalues['config']['class'] . '"></i><p>{label}</p></a>'
                        ];
                    }
                }
            } else {
                foreach ($menuItems as $k => $mv) {
                    if ($mv['is_menu']) {
                        $result[$key] = [
                            'url' => \Yii::$app->urlManager->createUrl(implode("/", [$mv['module'], $mv['controller'], $mv['action']])),
                            'label' => $mv['label'],
                            "template" => '<a href="{url}" class="nav-link ' . (Yii::$app->controller->action->id == $mv['action'] ? "active" : "") . '"><i class="fa fa-angle-double-right nav-icon"></i><p>{label}</p></a>',
                            'options' => ['class' => "nav-item "],
                        ];
                    }
                }
            }
        }
        return $result;
    }

    public static function styleMenuLabel($label, $menuConfig = [])
    {
        $text = ucwords(implode(' ', preg_split('/(?=[A-Z])/', $label)));
        // $label = "";
        // if (!empty($menuConfig)) {
        //     $label .= Html::tag("i", "", ["class" => $menuConfig['class']]);
        // }
        // $label .= Html::tag('p', $text);
        return $text;
    }

    public static function getDisplayTitle($menu = [])
    {
        $menu = empty($menu) ? self::$menu : $menu;
        $menuItem = !empty($menu['items']) ? $menu['items'] : $menu;
        $title = [];
        $st = [];
        foreach ($menuItem as $k => $m) {
            if (ArrayHelper::isAssociative($m)) {
                $st = self::getDisplayTitle($m);
            } else {
                foreach ($m as $sk => $sm) {
                    extract($sm);
                    $st[$controller][$action] = ['title' => $label, 'icon' => $icon];
                }
            }
            $title = ArrayHelper::merge($title, $st);
        }
        return $title;
    }

    public static function renderMenu()
    {
        return MenuHelper::getDisplayMenu();
    }

    public static function renderPageTitle($c = "", $a = "")
    {
        $titleList = \Yii::$app->cache->getOrSet('titles', function () {
            return MenuHelper::getDisplayTitle();
        });
        return !empty($titleList[$c][$a]) ? $titleList[$c][$a] : SITE_NAME;
    }
}
