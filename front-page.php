<?php get_header(); ?>

<div class="contact py-24">
    <div class="container">
        <div class="contactWrapper lg:grid lg:grid-cols-[_1fr_2fr] gap-8">

       
            <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
            );
            $newQuery = new WP_Query($args)
            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

            <div class="left flex flex-col items-center">
                <div class="info bg-dark flex items-center justify-center gap-6 w-fit p-6 rounded-tr-[1.5rem] mb-8">
                <div class="icon bg-orange flex items-center justify-center w-12 h-12 rounded-[50%]">
                    <i class="<?php echo get_field('icon'); ?> text-light text-3xl"></i>
                </div>
                <div class="infoText text-light">
                    <h4 class="text-xl font-bold"><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                </div>


                
            </div>

            <?php 
                endwhile;
                else :
                echo "no available content yet";
                endif;
                wp_reset_postdata();
                ?>

            <ul class="flex gap-7">
            <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'offset' => 2,
            );
            $newQuery = new WP_Query($args)
            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                <a href=""><i class='<?php echo get_field('icon'); ?>' href='<?php echo get_field('icon_link');?>'></i></a>

                <?php 
                endwhile;
                else :
                echo "no available content yet";
                endif;
                wp_reset_postdata();
                ?>
            </ul>

            </div>
            
                
            
                
                
            </div>
<div class="contact__box flex flex-col">
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Email Address">
                <textarea name="" id="" cols="20" rows="10" placeholder="Message"></textarea>
                <div class="flex justify-end">
                    <a href="" class="btn bg--primary">Submit</a>
                </div>


        </div>
    </div>
</div>

<?php get_footer(); ?>