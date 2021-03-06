<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => 'AdminLTE 3',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
    */

    'logo' => '<b>Mkdir</b>',
    'logo_img' => 'img/logo.png',
    'logo_img_class' => 'brand-image elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Labs',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Extra Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#66-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_header' => 'container-fluid',
    'classes_content' => 'container-fluid',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand-md',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#67-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#68-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#69-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'Back-Office',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#610-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#611-menu
    |
    */

    'menu' => [
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Homepage',
            'url'         => '/',
            'icon'        => 'fas fa-home',
        ],
        ['text' => 'Back-Office Page Blog',
         'icon_color' => 'red',
         'can'         => 'redacteur',
         'submenu' => [
            [
                'text'        => 'Blog',
                'url'         => '/BDD-Blog',
                'icon'        => 'fas fa-blog',
                'icon_color'  => 'purple',
                'can'         => 'redacteur',
                'submenu' => [
                    [
                        'text'        => 'Base de données',
                        'url'         => '/BDD-Blog',
                        'icon'        => 'far fa-fw fa-file',
                        'icon_color' => 'blue',
                        'can'         => 'redacteur',
                    ],
                    [
                        'text'        => 'Validez un article',
                        'url'         => '/BDD-Valide',
                        'icon'        => 'far fa-fw fa-file',
                        'icon_color' => 'green',
                        'can'         => 'webmaster',
                    ],
                    [
                        'text'        => 'Ajoutez un article',
                        'url'         => '/AddArticle',
                        'icon'        => 'far fa-fw fa-file',
                        'icon_color' => 'red',
                        'can'         => 'redacteur',
                    ]
                ]
            ],
            [
                'text'        => 'Categorie',
                'url'         => '/BDD-Categorie',
                'icon'        => 'fas fa-puzzle-piece',
                'icon_color'  => 'purple',
                'can'         => 'admin',
                'submenu' => [
                    [
                        'text'        => 'Base de données',
                        'url'         => '/BDD-Categorie',
                        'icon'        => 'fas fa-puzzle-piece',
                        'icon_color' => 'blue',
                    ],
                    [
                        'text'        => 'Ajoutez une catégorie',
                        'url'         => '/CreateCategorie',
                        'icon'        => 'fas fa-puzzle-piece',
                        'icon_color' => 'red',
                    ]
                ]
            ],
            [
                'text'        => 'Tag',
                'url'         => '/BDD-Tag',
                'icon'        => 'fas fa-puzzle-piece',
                'icon_color'  => 'purple',
                'can'         => 'admin',
                'submenu' => [
                    [
                        'text'        => 'Base de données',
                        'url'         => '/BDD-Tag',
                        'icon'        => 'fas fa-puzzle-piece',
                        'icon_color' => 'blue',
                    ],
                    [
                        'text'        => 'Ajoutez un tag',
                        'url'         => '/CreateTag',
                        'icon'        => 'fas fa-puzzle-piece',
                        'icon_color' => 'red',
                    ]
                ]
            ],
            [
                'text'        => 'Commentaires',
                'url'         => '/BDD-Commentaire',
                'icon'        => 'fas fa-newspaper',
                'icon_color'  => 'purple',
                'can'         => 'admin',
            ],
            [
                'text'        => 'Quote',
                'url'         => '/BDD-Quote',
                'icon'        => 'fas fa-newspaper',
                'icon_color'  => 'purple',
                'can'         => 'admin',
            ],
         ]
        ],
        ['text' => 'Back-Office Page Contact',
         'icon_color' => 'yellow',
         'can'         => 'webmaster',
         'submenu' => [
            [
                'text'        => 'Formulaire',
                'url'         => '/BDD-Form',
                'icon'        => 'fas fa-paragraph',
                'icon_color'  => 'pink',
                'can'         => 'admin',
            ],
            [
                'text'        => 'Contact',
                'url'         => '/BDD-Contact',
                'icon'        => 'fas fa-id-card',
                'icon_color'  => 'pink',
                'can'         => 'webmaster',
            ], 
         ]
        ],
        ['text' => 'Back-Office Page Service',
         'icon_color' => 'green',
         'can'         => 'webmaster',
         'submenu' => [
            [
                'text'        => 'Service',
                'url'         => '/BDD-Service',
                'icon'        => 'fas fa-fw fa-share',
                'icon_color'  => 'cyan',
                'submenu' => [
                    [
                        'text'        => 'Base de données',
                        'url'         => '/BDD-Service',
                        'icon'        => 'far fa-fw fa-file',
                        'icon_color' => 'blue',
                    ],
                    [
                        'text'        => 'Ajoutez un service',
                        'url'         => '/EnvoiService',
                        'icon'        => 'far fa-fw fa-file',
                        'icon_color' => 'red',
                    ]
                ]
            ],
         ]
        ],
        [
            'text'        => 'Header',
            'url'         => '/BDD-Header',
            'icon'        => 'far fa-fw fa-file',
            'can'         => 'webmaster',
            'submenu' => [
                [
                    'text'        => 'Base de données',
                    'url'         => '/BDD-Header',
                    'icon'        => 'far fa-fw fa-file',
                    'icon_color' => 'blue',
                ],
                [
                    'text'        => 'Ajoutez un carousel',
                    'url'         => '/EnvoiCarousel',
                    'icon'        => 'far fa-fw fa-file',
                    'icon_color' => 'red',
                ]
            ]
        ],
        [
            'text'        => 'Discover',
            'url'         => '/BDD-Discover',
            'icon'        => 'fas fa-file-alt',
            'can'         => 'webmaster',
        ],
        [
            'text'        => 'Titre',
            'url'         => '/BDD-Titre',
            'icon'        => 'fas fa-paragraph',
            'can'         => 'admin'
        ],
        [
            'text'        => 'Ready',
            'url'         => '/BDD-Ready',
            'icon'        => 'fas fa-heading',
            'can'         => 'admin'
        ],
        [
            'text'        => 'Footer',
            'url'         => '/BDD-Footer',
            'icon'        => 'fas fa-shoe-prints',
            'can'         => 'admin'
        ],
        [
            'text'        => 'Testimonial',
            'url'         => '/BDD-Testimonial',
            'icon'        => 'fas fa-users',
            'can'         => 'webmaster',
            'submenu' => [
                [
                    'text'        => 'Base de données',
                    'url'         => '/BDD-Testimonial',
                    'icon'        => 'far fa-fw fa-file',
                    'icon_color' => 'blue',
                ],
                [
                    'text'        => 'Ajoutez un testimonial',
                    'url'         => '/EnvoiTestimonial',
                    'icon'        => 'far fa-fw fa-file',
                    'icon_color' => 'red',
                ]
            ]
        ],
        [
            'text'        => 'Users',
            'url'         => '/BDD-Users',
            'icon'        => 'fas fa-users',
            'can'         => 'ceo',
        ],
        [
            'text'        => 'Newsletter',
            'url'         => '/BDD-News',
            'icon'        => 'fas fa-newspaper',
            'can'         => 'admin',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#612-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#613-plugins
    |
    */

    'plugins' => [
        [
            'name' => 'Datatables',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        [
            'name' => 'Select2',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        [
            'name' => 'Chartjs',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        [
            'name' => 'Sweetalert2',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        [
            'name' => 'Pace',
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],
];
