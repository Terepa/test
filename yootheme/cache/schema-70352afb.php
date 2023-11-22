<?php

return [
  'kind' => 'Document', 
  'definitions' => [[
      'kind' => 'DirectiveDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'bind'
      ], 
      'arguments' => [[
          'kind' => 'InputValueDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'id'
          ], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'InputValueDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'class'
          ], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'InputValueDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'args'
          ], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ]], 
      'repeatable' => false, 
      'locations' => [[
          'kind' => 'Name', 
          'value' => 'OBJECT'
        ], [
          'kind' => 'Name', 
          'value' => 'ENUM_VALUE'
        ], [
          'kind' => 'Name', 
          'value' => 'FIELD_DEFINITION'
        ]]
    ], [
      'kind' => 'DirectiveDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'call'
      ], 
      'arguments' => [[
          'kind' => 'InputValueDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'func'
          ], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'InputValueDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'args'
          ], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ]], 
      'repeatable' => false, 
      'locations' => [[
          'kind' => 'Name', 
          'value' => 'ENUM_VALUE'
        ], [
          'kind' => 'Name', 
          'value' => 'FIELD_DEFINITION'
        ]]
    ], [
      'kind' => 'DirectiveDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'slice'
      ], 
      'arguments' => [[
          'kind' => 'InputValueDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'offset'
          ], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Int'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'InputValueDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'limit'
          ], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Int'
            ]
          ], 
          'directives' => []
        ]], 
      'repeatable' => false, 
      'locations' => [[
          'kind' => 'Name', 
          'value' => 'FIELD'
        ], [
          'kind' => 'Name', 
          'value' => 'FRAGMENT_SPREAD'
        ], [
          'kind' => 'Name', 
          'value' => 'INLINE_FRAGMENT'
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'Query'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'date'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Date'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\DateQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'authorArchive'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'User'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\UserQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'site'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Site'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\SiteQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'search'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Search'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\SearchQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'posts'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'PostsQuery'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'pages'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'PagesQuery'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'products'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'ProductsQuery'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'categories'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'CategoriesQuery'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'tags'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'TagsQuery'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'productCats'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'ProductCatsQuery'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'productTags'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'ProductTagsQuery'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customMenuItem'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'menu'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'id'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'MenuItem'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomMenuItemQueryType::resolveItem', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customMenuItems'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'id'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'parent'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'heading'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'include_heading'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'defaultValue' => [
                'kind' => 'BooleanValue', 
                'value' => true
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'ids'
              ], 
              'type' => [
                'kind' => 'ListType', 
                'type' => [
                  'kind' => 'NamedType', 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'String'
                  ]
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'MenuItem'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomMenuItemQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customUser'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'id'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'User'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomUserQueryType::resolveUser', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customUsers'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'roles'
              ], 
              'type' => [
                'kind' => 'ListType', 
                'type' => [
                  'kind' => 'NamedType', 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'String'
                  ]
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'User'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomUserQueryType::resolveUsers', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'file'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'pattern'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'File'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Filesystem\\Type\\FileQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'files'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'pattern'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'File'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Filesystem\\Type\\FilesQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'Date'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'date'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\DateType::date', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'User'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'name'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\UserType::name', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'nicename'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\UserType::nicename', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'nickname'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'firstName'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\UserType::firstName', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'lastName'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\UserType::lastName', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'description'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'email'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\UserType::email', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'registered'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\UserType::registered', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'url'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\UserType::url', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'link'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\UserType::link', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'avatar'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'size'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\UserType::avatar', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'rolesString'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'separator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\UserType::rolesString', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'id'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\UserType::id', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'Site'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'title'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'page_title'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'page_locale'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Type\\SiteType::resolvePageLocale', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'page_url'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'query'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Type\\SiteType::resolvePageUrl', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'user'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'User'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'is_guest'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Int'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'item_count'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Int'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'woocommerce'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'WoocommercePages'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\SiteType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'WoocommercePages'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'my_account'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Boolean'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'login'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Boolean'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'lost_password'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Boolean'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'reset_link_sent'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Boolean'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'lost_password_confirmation'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Boolean'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'checkout'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Boolean'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'order_received'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Boolean'
            ]
          ], 
          'directives' => []
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'Search'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'searchword'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\SearchType::searchQuery', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'total'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\SearchType::foundPosts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'PostsQuery'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'singlePost'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Post'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\SinglePostQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'singlePreviousPost'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'taxonomy'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Post'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\SinglePostQueryType::resolvePreviousPost', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'singleNextPost'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'taxonomy'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Post'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\SinglePostQueryType::resolveNextPost', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customPost'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'id'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'terms'
              ], 
              'type' => [
                'kind' => 'ListType', 
                'type' => [
                  'kind' => 'NamedType', 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'Int'
                  ]
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'users'
              ], 
              'type' => [
                'kind' => 'ListType', 
                'type' => [
                  'kind' => 'NamedType', 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'Int'
                  ]
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'users_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'category_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'post_tag_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Post'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomPostQueryType::resolvePost', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"post_type":"post"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customPosts'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'terms'
              ], 
              'type' => [
                'kind' => 'ListType', 
                'type' => [
                  'kind' => 'NamedType', 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'Int'
                  ]
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'users'
              ], 
              'type' => [
                'kind' => 'ListType', 
                'type' => [
                  'kind' => 'NamedType', 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'Int'
                  ]
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'users_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'category_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'post_tag_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Post'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomPostQueryType::resolvePosts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"post_type":"post"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'archivePostSingle'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Post'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostArchiveQueryType::resolveSingle', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'archivePost'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Post'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostArchiveQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'Post'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'title'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::title', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'content'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_intro_text'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::content', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'teaser'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_excerpt'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::teaser', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'excerpt'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::excerpt', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'date'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::date', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'modified'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::modified', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'commentCount'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::commentCount', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'metaString'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'format'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'separator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'link_style'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_publish_date'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_author'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_comments'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_taxonomy'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'date_format'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::metaString', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'featuredImage'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Attachment'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::featuredImage', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'link'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::link', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'author'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'User'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::author', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'post_name'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'id'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::id', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'categories'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Category'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::resolveTerms', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"category"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'categoryString'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'separator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_link'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'link_style'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::resolveTermString', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"category"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'tags'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'PostTag'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::resolveTerms', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"post_tag"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'post_tagString'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'separator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_link'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'link_style'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::resolveTermString', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"post_tag"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'relatedPosts'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'category'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'post_tag'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'author'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Post'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::relatedPosts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'field'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'PostFields'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::field', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'Attachment'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'url'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\AttachmentType::url', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'alt'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\AttachmentType::alt', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'caption'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\AttachmentType::caption', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'Category'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'name'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'description'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'link'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyType::resolveLink', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'count'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'parent'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Category'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyType::resolveParent', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"category"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'children'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Category'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyType::resolveChildren', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"category"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'slug'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'term_id'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'posts'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'include_children'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Post'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyType::resolvePosts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"post_type":"post"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'PostTag'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'name'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'description'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'link'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyType::resolveLink', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'count'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'slug'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'term_id'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'posts'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'include_children'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Post'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyType::resolvePosts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"post_type":"post"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'PostFields'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'intro_image'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Attachment'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"field":"intro_image"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'related_products'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Product'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"field":"related_products"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'Product'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'title'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::title', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'content'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_intro_text'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::content', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'teaser'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_excerpt'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::teaser', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'excerpt'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\ProductType::excerpt', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'date'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::date', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'modified'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::modified', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'commentCount'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::commentCount', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'metaString'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'format'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'separator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'link_style'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_publish_date'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_author'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_comments'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_taxonomy'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'date_format'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::metaString', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'featuredImage'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Attachment'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::featuredImage', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'link'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::link', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'author'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'User'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::author', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'post_name'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'id'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::id', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_cats'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'ProductCat'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::resolveTerms', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"product_cat"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_catString'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'separator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_link'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'link_style'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::resolveTermString', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"product_cat"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_tags'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'ProductTag'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::resolveTerms', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"product_tag"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_tagString'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'separator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_link'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'link_style'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::resolveTermString', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"product_tag"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_visibilitys'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'String'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::resolveTerms', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"product_visibility"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_visibilityString'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'separator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_link'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'link_style'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::resolveTermString', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"product_visibility"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'relatedProducts'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'product_cat'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'product_tag'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'product_visibility'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'author'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'exclude_upsell'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'exclude_cross_sell'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Product'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\ProductType::resolveProducts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'woocommerce'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'WoocommerceFields'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\ProductType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'field'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'ProductFields'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::field', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'ProductCat'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'name'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'description'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'link'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyType::resolveLink', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'count'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'parent'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'ProductCat'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyType::resolveParent', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"product_cat"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'children'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'ProductCat'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyType::resolveChildren', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"product_cat"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'slug'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'term_id'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'products'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'include_children'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Product'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyType::resolvePosts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"post_type":"product"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'thumbnail'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Attachment'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\ProductCategoryType::thumbnail', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'ProductTag'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'name'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'description'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'link'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyType::resolveLink', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'count'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'slug'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'term_id'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'products'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'include_children'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Product'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyType::resolvePosts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"post_type":"product"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'WoocommerceFields'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'sku'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\FieldsType::sku', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'price'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\FieldsType::price', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'stock'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\FieldsType::stock', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'rating'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'link'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\FieldsType::rating', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'on_sale'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Boolean'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\FieldsType::is_on_sale', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'total_sales'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\FieldsType::totalSales', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'add_to_cart_url'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\FieldsType::add_to_cart_url', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'add_to_cart_text'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\FieldsType::add_to_cart_text', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'additional_information'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\FieldsType::additional_information', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'attributes'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'AttributeField'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\FieldsType::attributes', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'gallery_image_ids'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Attachment'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\FieldsType::galleryImageIds', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'upsell_products'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Product'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\FieldsType::upsell_products', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'cross_sell_products'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Product'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\FieldsType::cross_sell_products', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'AttributeField'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'name'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\AttributeFieldType::name', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'value'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'separator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\AttributeFieldType::value', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'ProductFields'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'intro_image'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Attachment'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"field":"intro_image"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_intro_image_landscape'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Attachment'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"field":"product_intro_image_landscape"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_intro_image_landscape_hover'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Attachment'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"field":"product_intro_image_landscape_hover"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_teaser_image_bg_square'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Attachment'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"field":"product_teaser_image_bg_square"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_teaser_image_bg_square_text_color'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'ChoiceField'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"field":"product_teaser_image_bg_square_text_color"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_teaser_image_bg_landscape'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Attachment'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"field":"product_teaser_image_bg_landscape"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_teaser_image_bg_landscape_text_color'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'ChoiceField'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"field":"product_teaser_image_bg_landscape_text_color"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_care_instructions'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"field":"product_care_instructions"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_size_fit'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"field":"product_size_fit"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_delivery'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"field":"product_delivery"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_shop_link'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"field":"product_shop_link"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'product_faq'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Acf\\Type\\FieldsType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"field":"product_faq"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'ChoiceField'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'label'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'value'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'PagesQuery'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'singlePage'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Page'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\SinglePostQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'singlePreviousPage'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Page'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\SinglePostQueryType::resolvePreviousPost', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'singleNextPage'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Page'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\SinglePostQueryType::resolveNextPost', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customPage'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'id'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'terms'
              ], 
              'type' => [
                'kind' => 'ListType', 
                'type' => [
                  'kind' => 'NamedType', 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'Int'
                  ]
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'users'
              ], 
              'type' => [
                'kind' => 'ListType', 
                'type' => [
                  'kind' => 'NamedType', 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'Int'
                  ]
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'users_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Page'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomPostQueryType::resolvePost', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"post_type":"page"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customPages'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'terms'
              ], 
              'type' => [
                'kind' => 'ListType', 
                'type' => [
                  'kind' => 'NamedType', 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'Int'
                  ]
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'users'
              ], 
              'type' => [
                'kind' => 'ListType', 
                'type' => [
                  'kind' => 'NamedType', 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'Int'
                  ]
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'users_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Page'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomPostQueryType::resolvePosts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"post_type":"page"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'Page'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'title'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::title', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'content'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_intro_text'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::content', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'teaser'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_excerpt'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::teaser', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'date'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::date', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'modified'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::modified', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'commentCount'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::commentCount', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'metaString'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'format'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'separator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'link_style'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_publish_date'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_author'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_comments'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'show_taxonomy'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'date_format'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::metaString', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'featuredImage'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Attachment'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::featuredImage', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'link'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::link', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'author'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'User'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::author', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'post_name'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'id'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::id', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'relatedPages'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'author'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Page'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostType::relatedPosts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'ProductsQuery'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'singleProduct'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Product'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\SinglePostQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'singlePreviousProduct'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'taxonomy'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Product'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\SinglePostQueryType::resolvePreviousPost', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'singleNextProduct'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'taxonomy'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Product'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\SinglePostQueryType::resolveNextPost', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customProduct'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'id'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'terms'
              ], 
              'type' => [
                'kind' => 'ListType', 
                'type' => [
                  'kind' => 'NamedType', 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'Int'
                  ]
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'users'
              ], 
              'type' => [
                'kind' => 'ListType', 
                'type' => [
                  'kind' => 'NamedType', 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'Int'
                  ]
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'users_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'product_cat_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'product_tag_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'product_visibility_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'on_sale'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Product'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\CustomProductQueryType::resolveProduct', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"post_type":"product"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customProducts'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'terms'
              ], 
              'type' => [
                'kind' => 'ListType', 
                'type' => [
                  'kind' => 'NamedType', 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'Int'
                  ]
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'users'
              ], 
              'type' => [
                'kind' => 'ListType', 
                'type' => [
                  'kind' => 'NamedType', 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'Int'
                  ]
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'users_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_alphanum'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'product_cat_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'product_tag_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'product_visibility_operator'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'on_sale'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Product'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Woocommerce\\Type\\CustomProductQueryType::resolveProducts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"post_type":"product"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'archiveProductSingle'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Product'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostArchiveQueryType::resolveSingle', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'archiveProduct'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Product'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\PostArchiveQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'CategoriesQuery'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'taxonomyCategory'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Category'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyArchiveQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'categoryPostSingle'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Post'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyArchiveQueryType::resolvePostsSingle', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'categoryPost'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Post'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyArchiveQueryType::resolvePosts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customCategory'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'id'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Category'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomTaxonomyQueryType::resolveTerm', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customCategories'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'id'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Category'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomTaxonomyQueryType::resolveTerms', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"category"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'TagsQuery'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'taxonomyPostTag'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'PostTag'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyArchiveQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'postTagPostSingle'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Post'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyArchiveQueryType::resolvePostsSingle', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'postTagPost'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Post'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyArchiveQueryType::resolvePosts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customPostTag'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'id'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'PostTag'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomTaxonomyQueryType::resolveTerm', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customTags'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'id'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'PostTag'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomTaxonomyQueryType::resolveTerms', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"post_tag"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'ProductCatsQuery'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'taxonomyProductCat'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'ProductCat'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyArchiveQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'productCatProductSingle'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Product'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyArchiveQueryType::resolvePostsSingle', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'productCatProduct'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Product'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyArchiveQueryType::resolvePosts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customProductCat'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'id'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'ProductCat'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomTaxonomyQueryType::resolveTerm', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customProductCats'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'id'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'ProductCat'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomTaxonomyQueryType::resolveTerms', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"product_cat"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'ProductTagsQuery'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'taxonomyProductTag'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'ProductTag'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyArchiveQueryType::resolve', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'productTagProductSingle'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Product'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyArchiveQueryType::resolvePostsSingle', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'productTagProduct'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'Product'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\TaxonomyArchiveQueryType::resolvePosts', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customProductTag'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'id'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'ProductTag'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomTaxonomyQueryType::resolveTerm', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'customProductTags'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'id'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'offset'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'limit'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Int'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ], [
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'order_direction'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'String'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'ProductTag'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\CustomTaxonomyQueryType::resolveTerms', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ], [
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => '{"taxonomy":"product_tag"}', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'args'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'MenuItem'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'title'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'image'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\MenuItemType::data', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'icon'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\MenuItemType::data', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'subtitle'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\MenuItemType::data', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'url'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'active'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'Boolean'
            ]
          ], 
          'directives' => []
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'type'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\MenuItemType::type', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'parent'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'MenuItem'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\MenuItemType::parent', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'children'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'ListType', 
            'type' => [
              'kind' => 'NamedType', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'MenuItem'
              ]
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\MenuItemType::children', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'id'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Wordpress\\Source\\Type\\MenuItemType::id', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ObjectTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'File'
      ], 
      'interfaces' => [], 
      'directives' => [], 
      'fields' => [[
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'name'
          ], 
          'arguments' => [[
              'kind' => 'InputValueDefinition', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'title_case'
              ], 
              'type' => [
                'kind' => 'NamedType', 
                'name' => [
                  'kind' => 'Name', 
                  'value' => 'Boolean'
                ]
              ], 
              'directives' => []
            ]], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Filesystem\\Type\\FileType::name', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'basename'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Filesystem\\Type\\FileType::basename', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'dirname'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Filesystem\\Type\\FileType::dirname', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'url'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Filesystem\\Type\\FileType::url', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'path'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Filesystem\\Type\\FileType::path', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'content'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Filesystem\\Type\\FileType::content', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'size'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Filesystem\\Type\\FileType::size', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'extension'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Filesystem\\Type\\FileType::extension', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'mimetype'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Filesystem\\Type\\FileType::mimetype', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'accessed'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Filesystem\\Type\\FileType::accessed', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'changed'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Filesystem\\Type\\FileType::changed', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ], [
          'kind' => 'FieldDefinition', 
          'name' => [
            'kind' => 'Name', 
            'value' => 'modified'
          ], 
          'arguments' => [], 
          'type' => [
            'kind' => 'NamedType', 
            'name' => [
              'kind' => 'Name', 
              'value' => 'String'
            ]
          ], 
          'directives' => [[
              'kind' => 'Directive', 
              'name' => [
                'kind' => 'Name', 
                'value' => 'call'
              ], 
              'arguments' => [[
                  'kind' => 'Argument', 
                  'value' => [
                    'kind' => 'StringValue', 
                    'value' => 'YOOtheme\\Builder\\Source\\Filesystem\\Type\\FileType::modified', 
                    'block' => false
                  ], 
                  'name' => [
                    'kind' => 'Name', 
                    'value' => 'func'
                  ]
                ]]
            ]]
        ]]
    ], [
      'kind' => 'ScalarTypeDefinition', 
      'name' => [
        'kind' => 'Name', 
        'value' => 'Object'
      ], 
      'directives' => []
    ]]
];