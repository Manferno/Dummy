<?php
    /* Template Name: Home */
    get_header();
?>

 

   
<section>

    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/IJ_P1i4F7y4?autoplay=1&mute=1&loop=1&playlist=IJ_P1i4F7y4&controls=0&showinfo=0&rel=0" frameborder="1" allowfullscreen></iframe>
    </div>

    <div class="content">
        <h1>Bienvenido</h1>
        <p>Este es un video de fondo.</p>
    </div>
</section>

   


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