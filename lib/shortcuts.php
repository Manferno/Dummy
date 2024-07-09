<?php
    function getCat($limit = null, $paged = null, $categoria = null, $tag = null, $search = null)
    {
        $args               = [
                                'post_type' => 'grupo_de_documentos',
                                'post_status' => 'publish',
                                'orderby' => 'publish_date',
                                'order'	=> 'DESC',
                                'paged' => $paged
                            ];

        // Limite
        if(!empty($limit))
        {
            $args['posts_per_page']     = $limit;
        }
        else
        {
            $args['posts_per_page']     = -1;
        }

        // Categoría
        if($categoria != null)
        {         
            $args['tax_query'] = array(
                array(
                    'taxonomy'      => 'categoria_documento',
                    'field'         => 'ID',
                    'terms'         => array($categoria)
                )
            );
        }

        if(!empty($search))
        {
            $args['s']      = $search;
        }

        $items              = new WP_Query($args);

        wp_reset_postdata();
        return $items;
        var_dump($items);
    }

    function getTax($taxonomy)
    {
        $args       = [
            'taxonomy'      => $taxonomy,
            'hide_empty'    => false,
            /*'meta_key'      => 'orden',
            'orderby'       => 'meta_value',
            'order'		    => 'ASC',*/
        ];

        $terms      = get_terms($args);

        wp_reset_postdata();

        return $terms;
    }

    function getProductos($limit = null, $paged = null, $categoria = null, $tag = null, $search = null)
    {
        $args               = [
                                'post_type' => 'grupo_de_documentos',
                                'post_status' => 'publish',
                                'orderby' => 'publish_date',
                                'order'	=> 'DESC',
                                'paged' => $paged
                            ];

        // Limite
        if(!empty($limit))
        {
            $args['posts_per_page']     = $limit;
        }
        else
        {
            $args['posts_per_page']     = -1;
        }

        $items              = new WP_Query($args);

        wp_reset_postdata();
        return $items;
    }
?>