<?php // $file = /srv/projects/site.test/wp-content/themes/yootheme/packages/theme-wordpress-woocommerce/config/customizer.json

return [
  'sections' => [
    'layout' => [
      'fields' => [
        'layout' => [
          'items' => [
            'woocommerce' => 'WooCommerce'
          ]
        ]
      ]
    ]
  ], 
  'panels' => [
    'menu-item' => [
      'fields' => [
        'woocommerce_cart_quantity' => [
          'label' => 'Cart Quantity', 
          'description' => 'Display the cart quantity in brackets or as a badge.', 
          'type' => 'select', 
          'options' => [
            'Brackets' => '', 
            'Badge' => 'badge'
          ], 
          'show' => sprintf('this.panel.item.object_id === %s', $config->get('woocommerce.cartPage'))
        ]
      ]
    ], 
    'woocommerce' => [
      'title' => 'WooCommerce', 
      'width' => 400, 
      'fields' => [
        'woocommerce.price.from' => [
          'label' => 'Variable Product', 
          'description' => 'Show the lowest price instead of the price range.', 
          'type' => 'checkbox', 
          'text' => 'Show lowest price'
        ], 
        'woocommerce.price.sale_after_regular' => [
          'label' => 'On Sale Product', 
          'description' => 'Show the sale price before or after the regular price.', 
          'text' => 'Switch prices', 
          'type' => 'checkbox'
        ], 
        'woocommerce.product_thumbnails_columns' => [
          'label' => 'Gallery Thumbnail Columns', 
          'description' => 'Set the number of columns for the gallery thumbnails.', 
          'type' => 'select', 
          'default' => '4', 
          'options' => [
            2 => '2', 
            3 => '3', 
            4 => '4', 
            5 => '5', 
            6 => '6'
          ]
        ], 
        'woocommerce.cross_sells_columns' => [
          'label' => 'Cart Cross-sells Columns', 
          'description' => 'Set the number of columns for the cart cross-sell products.', 
          'type' => 'select', 
          'default' => '2', 
          'options' => [
            2 => '2', 
            3 => '3', 
            4 => '4', 
            5 => '5', 
            6 => '6'
          ]
        ]
      ]
    ]
  ]
];
