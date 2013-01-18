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
                                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                    <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                                    <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
                                </header>
                                    

                                    <!-- Display the Post's content in a div box. -->
                                    <div class="entry">
                                        <?php the_excerpt(); ?>
                                    </div>

                                    <!-- Display a comma separated list of the Post's Categories. -->
                                    <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
                            </article>
                            <!-- Stop The Loop (but note the "else:" - see next line). -->
                            <?php endwhile; else: ?>
                            
                        <!-- REALLY stop The Loop. -->
                        <?php endif; ?>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
