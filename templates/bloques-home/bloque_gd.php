<?php
    $getTitle      = get_sub_field('titulo');
    echo $getTitle;
    
    echo (" aca deberia ir el title id ");
    
    $custom_repeater = get_sub_field('grupos_de_documentos');
    if($custom_repeater){
    foreach($custom_repeater as $persona){ ?>
    <table>
    <tr>
        <td>ID GD: <?php echo $persona['grupo'];?></td>
        <td>Nombre GD: <?php echo get_the_title($persona['grupo']);?></td>
    </tr>
    </table>
    <?php } ?>
    <?php } ?>
 




