<?php
    $id = get_the_ID();
    $plats = query_posts(array(
        'post_type' => 'plat',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    ));
    $categories = get_terms('plat-category');
?>

<section id="plats" class="bgBlack">
    <div class="row">
        <div id="filters" class="button-group">
            <button class="button is-checked" data-filter="*">Tout</button>
            <?php foreach($categories as $c): ?>
            <button class="button" data-filter=".<?php echo $c->slug; ?>"><?php echo $c->name; ?></button>
            <?php endforeach; ?>
        </div>

        <?php if(have_posts()): ?>
        <div class="grid">

            <?php
            while(have_posts()) : the_post();
                $catsObj = wp_get_object_terms( get_the_id(), 'plat-category' );
                $catsArray = array();
                foreach($catsObj as $c) {
                    array_push($catsArray, $c->slug);
                }
                $cats = implode(' ', $catsArray);
            ?>
            <div class="element-item <?php echo $cats; ?>" style="background: url('<?php echo the_post_thumbnail_url(); ?>');">
                <h3 class="name"><?php the_title(); ?></h3>
            </div>
            <?php endwhile; ?>

        </div><!-- end .grid -->
        <?php endif; ?>

    </div><!-- end .row -->
</section><!-- end #concept -->