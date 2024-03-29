<?php // $file = /srv/projects/site.test/wp-content/themes/yootheme/packages/builder-wordpress-woocommerce/elements/products/element.json

return [
  'name' => 'woo_products', 
  'title' => 'Products', 
  'group' => 'woocommerce', 
  'icon' => $filter->apply('url', './images/icon.svg', $file), 
  'iconSmall' => $filter->apply('url', './images/iconSmall.svg', $file), 
  'element' => true, 
  'defaults' => [
    'type' => 'current_query', 
    'show_count' => true, 
    'show_ordering' => true, 
    'show_title' => true, 
    'show_rating' => true, 
    'limit' => 8, 
    'paginate' => 'false', 
    'columns' => 4, 
    'orderby' => 'date', 
    'order' => 'desc', 
    'product_visibility' => 'visible', 
    'cat_operator' => 'IN', 
    'tag_operator' => 'IN', 
    'terms_operator' => 'IN'
  ], 
  'templates' => [
    'render' => $filter->apply('path', './templates/template.php', $file)
  ], 
  'fields' => [
    'type' => [
      'label' => 'Products', 
      'description' => 'Choose products of the current page or query custom products.', 
      'type' => 'select', 
      'options' => [
        'Page' => [
          'Products' => 'current_query'
        ], 
        'Custom' => [
          'All Products' => 'products', 
          'On Sale' => 'sale_products', 
          'Top Rated' => 'top_rated_products', 
          'Best Selling' => 'best_selling_products', 
          'Recently Viewed' => 'recently_viewed_products'
        ]
      ]
    ], 
    'show_count' => [
      'type' => 'checkbox', 
      'text' => 'Show result count', 
      'enable' => 'type == \'current_query\''
    ], 
    'show_ordering' => [
      'type' => 'checkbox', 
      'text' => 'Show result ordering', 
      'enable' => 'type == \'current_query\''
    ], 
    'show_title' => [
      'type' => 'checkbox', 
      'text' => 'Show title'
    ], 
    'show_rating' => [
      'type' => 'checkbox', 
      'text' => 'Show rating'
    ], 
    'columns' => [
      'label' => 'Columns', 
      'description' => 'Set the number of grid columns for desktops and larger screens. On smaller viewports the columns will adapt automatically.', 
      'type' => 'number'
    ], 
    'limit' => [
      'label' => 'Limit', 
      'description' => 'Limit the number of products.', 
      'type' => 'number', 
      'enable' => 'type != \'current_query\''
    ], 
    'paginate' => [
      'label' => 'Pagination', 
      'description' => 'Enable the pagination.', 
      'type' => 'select', 
      'options' => [
        'Show' => 'true', 
        'Hide' => 'false'
      ], 
      'enable' => 'type != \'current_query\''
    ], 
    'orderby' => [
      'label' => 'Order', 
      'description' => 'Set the product ordering.', 
      'type' => 'select', 
      'options' => [
        'ID' => 'id', 
        'Date' => 'date', 
        'Title' => 'title', 
        'Price' => 'price', 
        'Rating' => 'rating', 
        'Purchases' => 'popularity', 
        'Menu' => 'menu_order', 
        'Random' => 'rand'
      ], 
      'enable' => '!$match(type ,\'current_query|top_rated_products|best_selling_products\')'
    ], 
    'order' => [
      'label' => 'Order Direction', 
      'description' => 'Set the order direction.', 
      'type' => 'select', 
      'options' => [
        'Ascending' => 'asc', 
        'Descending' => 'desc'
      ], 
      'enable' => '!$match(type ,\'current_query|top_rated_products|best_selling_products\')'
    ], 
    'product_visibility' => [
      'label' => 'Visibility', 
      'description' => 'Display products based on visibility.', 
      'type' => 'select', 
      'options' => [
        'Shop and Search' => 'visible', 
        'Featured' => 'featured', 
        'Shop' => 'catalog', 
        'Search' => 'search', 
        'Hidden' => 'hidden'
      ], 
      'enable' => 'type != \'current_query\''
    ], 
    'category' => [
      'label' => 'Categories', 
      'description' => 'Filter products by categories using a comma-separated list of category slugs.', 
      'type' => 'text', 
      'enable' => 'type != \'current_query\''
    ], 
    'cat_operator' => [
      'label' => 'Categories Operator', 
      'description' => 'Select the logical operator for the category comparison. Match at least one of the categories, none of the categories or all categories.', 
      'type' => 'select', 
      'options' => [
        'Match One (OR)' => 'IN', 
        'Match All (AND)' => 'AND', 
        'Don\'t Match (NOR)' => 'NOT IN'
      ], 
      'enable' => 'type != \'current_query\''
    ], 
    'tag' => [
      'label' => 'Tags', 
      'description' => 'Filter products by tags using a comma-separated list of tag slugs.', 
      'type' => 'text', 
      'enable' => 'type != \'current_query\''
    ], 
    'tag_operator' => [
      'label' => 'Tags Operator', 
      'description' => 'Select the logical operator for the tag comparison. Match at least one of the tags, none of the tags or all tags.', 
      'type' => 'select', 
      'options' => [
        'Match One (OR)' => 'IN', 
        'Match All (AND)' => 'AND', 
        'Don\'t Match (NOR)' => 'NOT IN'
      ], 
      'enable' => 'type != \'current_query\''
    ], 
    'attribute' => [
      'label' => 'Attribute Slug', 
      'description' => 'Filter products by attribute using the attribute slug.', 
      'type' => 'text', 
      'enable' => 'type != \'current_query\''
    ], 
    'terms' => [
      'label' => 'Attribute Terms', 
      'description' => 'Filter products by terms of the chosen attribute using a comma-separated list of attribute term slugs.', 
      'type' => 'text', 
      'enable' => 'type != \'current_query\' && attribute'
    ], 
    'terms_operator' => [
      'label' => 'Attribute Terms Operator', 
      'description' => 'Select the logical operator for the attribute term comparison. Match at least one of the terms, none of the terms or all terms.', 
      'type' => 'select', 
      'options' => [
        'Match One (OR)' => 'IN', 
        'Match All (AND)' => 'AND', 
        'Don\'t Match (NOR)' => 'NOT IN'
      ], 
      'enable' => 'type != \'current_query\''
    ], 
    'skus' => [
      'label' => 'Product SKUs', 
      'description' => 'Filter products using a comma-separated list of SKUs.', 
      'type' => 'text', 
      'enable' => 'type != \'current_query\''
    ], 
    'ids' => [
      'label' => 'Product IDs', 
      'description' => 'Filter products using a comma-separated list of IDs.', 
      'type' => 'text', 
      'enable' => 'type != \'current_query\''
    ], 
    'position' => $config->get('builder.position'), 
    'position_left' => $config->get('builder.position_left'), 
    'position_right' => $config->get('builder.position_right'), 
    'position_top' => $config->get('builder.position_top'), 
    'position_bottom' => $config->get('builder.position_bottom'), 
    'position_z_index' => $config->get('builder.position_z_index'), 
    'margin' => $config->get('builder.margin'), 
    'margin_remove_top' => $config->get('builder.margin_remove_top'), 
    'margin_remove_bottom' => $config->get('builder.margin_remove_bottom'), 
    'maxwidth' => $config->get('builder.maxwidth'), 
    'maxwidth_breakpoint' => $config->get('builder.maxwidth_breakpoint'), 
    'block_align' => $config->get('builder.block_align'), 
    'block_align_breakpoint' => $config->get('builder.block_align_breakpoint'), 
    'block_align_fallback' => $config->get('builder.block_align_fallback'), 
    'text_align' => $config->get('builder.text_align_justify'), 
    'text_align_breakpoint' => $config->get('builder.text_align_breakpoint'), 
    'text_align_fallback' => $config->get('builder.text_align_justify_fallback'), 
    'animation' => $config->get('builder.animation'), 
    '_parallax_button' => $config->get('builder._parallax_button'), 
    'visibility' => $config->get('builder.visibility'), 
    'name' => $config->get('builder.name'), 
    'status' => $config->get('builder.status'), 
    'id' => $config->get('builder.id'), 
    'class' => $config->get('builder.cls'), 
    'attributes' => $config->get('builder.attrs'), 
    'css' => [
      'label' => 'CSS', 
      'description' => 'Enter your own custom CSS. The following selectors will be prefixed automatically for this element: <code>.el-element</code>', 
      'type' => 'editor', 
      'editor' => 'code', 
      'mode' => 'css', 
      'attrs' => [
        'debounce' => 500, 
        'hints' => ['.el-element']
      ]
    ]
  ], 
  'fieldset' => [
    'default' => [
      'type' => 'tabs', 
      'fields' => [[
          'title' => 'Settings', 
          'fields' => [[
              'label' => 'WooCommerce', 
              'type' => 'group', 
              'divider' => true, 
              'fields' => ['type', 'show_count', 'show_ordering', 'show_title', 'show_rating', 'columns']
            ], [
              'label' => 'Custom Query', 
              'type' => 'group', 
              'divider' => true, 
              'fields' => ['limit', 'paginate', 'orderby', 'order', 'product_visibility', 'category', 'cat_operator', 'tag', 'tag_operator', 'attribute', 'terms', 'terms_operator', 'skus', 'ids']
            ], [
              'label' => 'General', 
              'type' => 'group', 
              'fields' => ['position', 'position_left', 'position_right', 'position_top', 'position_bottom', 'position_z_index', 'margin', 'margin_remove_top', 'margin_remove_bottom', 'maxwidth', 'maxwidth_breakpoint', 'block_align', 'block_align_breakpoint', 'block_align_fallback', 'text_align', 'text_align_breakpoint', 'text_align_fallback', 'animation', '_parallax_button', 'visibility']
            ]]
        ], $config->get('builder.advanced')]
    ]
  ]
];
