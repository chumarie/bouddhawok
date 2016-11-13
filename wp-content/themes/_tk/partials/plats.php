<?php
    $id = get_the_ID();
    $plats = query_posts(array(
        'post_type' => 'plat',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    ));
    $categories = get_terms('plat-category');
?>

<section id="plats" class="bgBlack padding-top-100">
    <div class="row">

        <div class="main-title">
            <h2 class="title colorGold">
                <span class="bgGold"></span>
                NOS PLATS
                <span class="bgGold"></span>
            </h2>
        </div>


        <div id="filters" class="button-group">
            <span class="button is-checked" data-filter="*">Tout</span>
            <?php foreach($categories as $c): ?>
            <span class="button" data-filter=".<?php echo $c->slug; ?>"><?php echo $c->name; ?></span>
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
                <a class="fancy" rel="plat" href="<?php echo the_post_thumbnail_url(); ?>">
                    <h3 class="name"><?php the_title(); ?></h3>
                </a>
            </div>
            <?php endwhile; ?>

        </div><!-- end .grid -->
        <?php endif; ?>

    </div><!-- end .row -->
</section><!-- end #concept -->