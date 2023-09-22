<div class="container">

<div class="one-time">
                <div class="slajd">
                    <div class=" left-slajd">
                        <h1><?php the_field('title_slider') ?></h1>
                        <p><?php the_field('text_slider') ?></p>
                        <button class="circle-button"><?php the_field('button_slider') ?></button>
                    </div>
                    <div class="right-slajd">
                        <img src="<?php echo get_template_directory_uri(); ?>./public/banner3.png" alt="banner1">
                    </div>
                </div>
    
                <div class="slajd">
                    <div class=" left-slajd">
					<h1><?php the_field('title_slider') ?></h1>
                    <p><?php the_field('text_slider') ?></p>
					<button class="circle-button"><?php the_field('button_slider') ?></button>
                    </div>
                    <div class=" right-slajd">
                        <img src="<?php echo get_template_directory_uri(); ?>./public/banner2.png" alt="banner1">
                    </div>
                </div>
    
                <div class="slajd">
                    <div class=" left-slajd">
						<h1><?php the_field('title_slider') ?></h1>
                        <p><?php the_field('text_slider') ?></p>
                        <button class="circle-button"><?php the_field('button_slider') ?></button>
                    </div>
                    <div class=" right-slajd">
                        <img src="<?php echo get_template_directory_uri(); ?>./public/banner1.png" alt="banner1">
                    </div>
                </div>
            </div>

<script>
 $('.one-time').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            variableWidth: true
            
        });
</script>


