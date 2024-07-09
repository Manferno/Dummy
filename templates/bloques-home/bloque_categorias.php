<?php


  ini_set("display_errors", 1);
  $showBlock = get_sub_field('titulo'); 
  echo $showBlock;

  $cat_post = getCat($limit = null, $paged = null, $categoria = 5);



  while ( $cat_post->have_posts() ) : $cat_post->the_post();
          
  
          echo "<br>";
          echo  ' -----aca va el title: -----' ;
          the_title();
          echo "<br>";
      
 
      //echo ($count == 3 ? '>>>>' : '');         
  endwhile;

  






  

 /*
// Llamar a la función getCat con la categoría 5
$cat_post = getCat($limit = null, $paged = null, $categoria = 5);

// Comprobar si hay posts devueltos por la consulta
if ($cat_post->have_posts()) {
    // Iniciar el bucle para mostrar los posts
    while ($cat_post->have_posts()) : $cat_post->the_post();
        echo "<br>";
        echo '-----aca va el title: -----';
        the_title(); // Mostrar el título del post
        echo "<br>";
    endwhile;
} else {
    // Si no hay posts, mostrar un mensaje
    echo 'No se encontraron posts en esta categoría.';
}
*/
?>

