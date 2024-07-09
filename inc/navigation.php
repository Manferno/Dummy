<?php 
    $optHeader      = get_field('header', 'option');
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid paddingCustom align-items-start">
        
        <div class="backBlue"></div>
        <a class="navbar-brand" href="<?=_blog?>">
            <img src="<?=$optHeader['logo']?>" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse align-content-start" id="navbarNav">
            <?php 
                wp_nav_menu(array(
                    'menu' => 'Menú Principal',
                    'container' => '',
                    'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0 me-3',
                    'container_class' => 'menuNavegacion',
                    'add_li_class'  => 'nav-item'
                ));
            ?>

            <!--<ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>-->
        </div>

    </div>
</nav>