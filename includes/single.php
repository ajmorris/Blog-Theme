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
                                    <h2 class="entry-title"><?php the_title(); ?></h2>
                                    <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                                    <p class="entry-meta"><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></p>
                                </header>
                                    <!-- Display the Post's content in a div box. -->
                                    <div class="entry">
                                        <?php the_content(); ?>
                                    </div>
                                    <!-- Display a comma separated list of the Post's Categories. -->
                                    <p class="entry-meta">Posted in <?php the_category(', '); ?></p>
                            </article>

                            <?php comments_template( '', true ); ?>


                            <?php if ( have_comments() ) : ?>
                                <h4><?php printf( _n( 'One Comment', '%1$s Comments', get_comments_number() ),number_format_i18n( get_comments_number() ) );
                        ?></h4>

                            // Comment loop goes here

                            <?php else: ?>
                                <h4>No comments</h4>
                            <?php endif; ?>


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
