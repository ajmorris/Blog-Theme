<?php include('header.php'); ?>

<section>
    <div class="container">
        <div class="row content">
            <div class="ten columns">
                <div class="row">
                    <div class="ten offset-by-two columns">
                        <!-- Start the Loop. -->
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <article>
                                <header>
                                    <h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                                    <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                                </header>
                                    <!-- Display the Post's content in a div box. -->
                                    <div class="entry">
                                        <?php the_content(); ?>
                                    </div>
                            </article>

                            <!-- Stop The Loop (but note the "else:" - see next line). -->
                            <?php endwhile; else: ?>

                        <!-- REALLY stop The Loop. -->
                        <?php endif; ?>  
                        
                    </div>
                </div>
                <div class="row">
                    <div class="ten offset-by-two columns">
                        <?php

                            global $wp_query;

                            $total_pages = $wp_query->max_num_pages;

                            if ($total_pages > 1){

                              $current_page = max(1, get_query_var('paged'));
                              
                              echo paginate_links(array(
                                  'base' => get_pagenum_link(1) . '%_%',
                                  'format' => '/page/%#%',
                                  'current' => $current_page,
                                  'total' => $total_pages,
                                ));
                            }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>