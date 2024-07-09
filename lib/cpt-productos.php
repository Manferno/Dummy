<?php

/* Custom Post Type
/* Productos
/*-----------------------------------------------------------------------------------*/

// Registrar Grupo de Documentos
add_action('init', function() {

    $labels = [
        'name'                  => _x('Grupos de documentos', 'Post Type General Name', 'dummy'),
        'singular_name'         => _x('Grupos de documentos', 'Post Type Singular Name', 'dummy'),
        'menu_name'             => __('Grupos de documentos', 'dummy'),
        'name_admin_bar'        => __('Grupos de documentos', 'dummy'),
        'archives'              => __('Archivo de Grupos de documentos', 'dummy'),
        'attributes'            => __('Atributos del Grupos de documentos', 'dummy'),
        'parent_item_colon'     => __('Grupos de documentos Padre:', 'dummy'),
        'all_items'             => __('Todos los Grupos de documentos', 'dummy'),
        'add_new_item'          => __('Añadir nuevo Grupos de documentos', 'dummy'),
        'add_new'               => __('Añadir', 'dummy'),
        'new_item'              => __('Nuevo Grupos de documentos', 'dummy'),
        'edit_item'             => __('Editar Grupos de documentos', 'dummy'),
        'update_item'           => __('Actualizar Grupos de documentos', 'dummy'),
        'view_item'             => __('Ver Grupos de documentos', 'dummy'),
        'view_items'            => __('Ver Grupos de documentos', 'dummy'),
        'search_items'          => __('Buscar Grupos de documentos', 'dummy'),
        'not_found'             => __('No encontrado', 'dummy'),
        'not_found_in_trash'    => __('No encontrado en la papelera', 'dummy'),
        'featured_image'        => __('Imagen destacada', 'dummy'),
        'set_featured_image'    => __('Establecer imagen destacada', 'dummy'),
        'remove_featured_image' => __('Quitar imagen destacada', 'dummy'),
        'use_featured_image'    => __('Usar como imagen destacada', 'dummy'),
        'insert_into_item'      => __('Insertar en el Grupos de documentos', 'dummy'),
        'uploaded_to_this_item' => __('Subido a este Grupos de documentos', 'dummy'),
        'items_list'            => __('Lista de Grupos de documentos', 'dummy'),
        'items_list_navigation' => __('Navegación del listado de Grupos de documentos', 'dummy'),
        'filter_items_list'     => __('Filtrar listado de Grupos de documentos', 'dummy'),
    ];

    $rewrite = [
        'slug'                  => 'grupo-de-documentos', // _x('columnas', 'URL slug', 'biofrescura'),
        'with_front'            => false,
        'pages'                 => false,
        'feeds'                 => false,
    ];

    // $capabilities = [
    //   'edit_post'             => 'edit_post',
    //   'read_post'             => 'read_post',
    //   'delete_post'           => 'delete_post',
    //   'edit_posts'            => 'edit_posts',
    //   'edit_others_posts'     => 'edit_others_posts',
    //   'publish_posts'         => 'publish_posts',
    //   'read_private_posts'    => 'read_private_posts',
    // ];

    $supports = [
        'title',
        'editor',
        'excerpt',
        // 'author',
        'thumbnail',
        // 'comments',
        // 'trackbacks',
        'revisions',
        'custom-fields',
        // 'page-attributes',
        // 'post-formats'
    ];

    $taxonomies = [
        'grupo_documento_tipo','grupo_documento_presentacion','grupo_documento_variedad'
    ];

    $args = [
        'label'                 => __('Grupo de Documentos', 'dummy'),
        'description'           => __('Grupo de Documentos', 'dummy'),
        'labels'                => $labels,
        'supports'              => $supports,
        'taxonomies'            => $taxonomies,
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        //'menu_position'         => '5.1',
        'menu_icon'             => 'dashicons-columns',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        // 'query_var'             => 'xxx', // Custom query variable - WP_Query(['post_type' => 'xxx', 'term' => 'yyy'])
        'rewrite'               => $rewrite,
        'capability_type'       => 'post',
        // 'capabilities'          => $capabilities,
        // 'show_in_rest'          => true,
        // 'rest_base'             => 'xxx',
        // 'rest_controller_class' => 'WP_REST_Posts_Controller',
    ];

    register_post_type('grupo_de_documentos', $args);

}, 0);



// Registrar Custom Tghaxonomy
// Categoria de documentos 
add_action('init', function() {

    $labels = [
        'name'                       => _x('Categorias de documentos', 'Taxonomy General Name', 'dummy'),
        'singular_name'              => _x('Categorias de documentos', 'Taxonomy Singular Name', 'dummy'),
        'menu_name'                  => __('Categorias de documentos', 'dummy'),
        'all_items'                  => __('Todas las categorias', 'dummy'),
        'parent_item'                => __('Categoria Superior', 'dummy'),
        'parent_item_colon'          => __('Categoria Superior:', 'dummy'),
        'new_item_name'              => __('Nombre de la nueva Categoria', 'dummy'),
        'add_new_item'               => __('Añadir nueva Categoria', 'dummy'),
        'edit_item'                  => __('Editar Categoria', 'dummy'),
        'update_item'                => __('Actualizar Categoria', 'dummy'),
        'view_item'                  => __('Ver Categoria', 'dummy'),
        'separate_items_with_commas' => __('Separa las categorias con commas', 'dummy'),
        'add_or_remove_items'        => __('Añadir o eliminar categoria', 'dummy'),
        'choose_from_most_used'      => __('Elige entre las más usadas', 'dummy'),
        'popular_items'              => __('Categorias Frecuentes', 'dummy'),
        'search_items'               => __('Buscar categorias', 'dummy'),
        'not_found'                  => __('No encontrado', 'dummy'),
        'no_terms'                   => __('No hay categoria', 'dummy'),
        'items_list'                 => __('Lista de categorias', 'dummy'),
        'items_list_navigation'      => __('Navegación de lista de categorias de documentos', 'dummy'),
    ];

    $rewrite = [
        'slug'                       => 'categoria-documento',
        'with_front'                 => false, // Use taxonomy slug as URL base.
        'hierarchical'               => true,
    ];

    $args = [
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => $rewrite,
    ];

  register_taxonomy('categoria_documento', ['grupo_de_documentos'], $args);

}, 0);
