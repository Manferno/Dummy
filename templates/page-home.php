<?php
    /* Template Name: Home */
    get_header();
?>

 
<section>

    <div class="container">
        <h1>HOME</h1>
        <?=get_field('TEXTO1_copy')?>

        <h2>Dummys - Repeater</h2>
       
        <?php 
        $custom_repeater = get_field('repeater_main');
        if($custom_repeater){
        foreach($custom_repeater as $persona){ ?>
        <table>
        <tr>
            <td>Nombre: <?php echo $persona['nombre'];?></td>
            <td>Edad: <?php echo $persona['edad'];?></td>
            <td>Mail: <?php echo $persona['email'];?></td>
        </tr>
        </table>
        <?php } ?>
        <?php } ?>

    </div>



    <div class="container">

        <h2>Gestor bloques</h2>

        <?php
        ###### OBTENCIÓN DE DATA VÍA BLOQUES ######
        if( have_rows('bloques') ):
            
            $moduleCount		= 0;
        
            while ( have_rows('bloques') ) : the_row();
            
            $moduleCount++;
            
            /*$rl = "";
            $rl = get_row_layout();

            //echo get_row_layout();
            echo $rl; */
            ini_set("display_errors", 1);
            switch(get_row_layout())
            {

                case 'bloque_gd':
                    include('bloques-home/bloque_gd.php');

                break;

                case 'bloque_categorias':
                    include('bloques-home/bloque_categorias.php');
                break;   
            
            }

            endwhile;
        endif;
        ?>

    </div>

</section>


<?php
    get_footer();
?>