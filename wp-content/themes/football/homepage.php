<?php
/*
 *  Template Name: Homepage
 *
 *  @Package Football Mania
 *
 */
get_header();
?>
<main role="main" class=" pt-3 px-2">
    <div class="row m-0">
        <div class="col-md-6">
            <div class="card-header bg-dark text-light mb-3 border-0">
                <strong>TOP NEWS</strong>
            </div>
            <?php
				$data = home_top(6);
				$x    = 1;
				if($data->have_posts())
					{
						while ( $data->have_posts() ) : $data->the_post();
						if($x == 1)
						    {

						        echo '<div class="card flex-xl-row mb-3 box-shadow">
                                        <a href="'.get_the_permalink().'" title="'.get_the_title( $post->ID).'" class="w-100">
                                            ' . get_the_post_thumbnail($post->ID,'first', ['class'=>'w-100 img-fluid'] ) .'
                                        </a>
                        
                                        <div class="card-body">
                                            <h1 class="h2">
                                                <a class="text-dark card-link" href="'.get_the_permalink().'" title="'.get_the_title( $post->ID ).'">	'.get_the_title( $post ).'</a>
                                            </h1>
                                            <p class="card-text mb-auto">'.get_the_excerpt($post->ID).'</p>
                                            <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                                        </div>
                        
                                    </div>
                                    <div class="card-deck">';
						    }
						else if(($x >1) && ($x<5))
						    {
						        echo '<div class="card box-shadow mb-3">
                                        <a href="'.get_the_permalink().'" title="'.get_the_title( $post->ID ).'">' .
                                    get_the_post_thumbnail($post->ID,'second', ['class'=>'w-100 img-fluid'] ) .'</a>    
                                        
                                        <div class="card-body">
                                            <h6 class="card-title">
                                                <a href="'.get_the_permalink().'" title="'.get_the_title( $post->ID )
                                    .'" class="text text-dark">
                                                	'.get_the_title( $post->ID ).'
                                                </a>
                                            </h6>
                                            <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                                        </div>
                                    </div>';
						    }
						else
						    {
						        echo '<div class="card box-shadow mb-3">
                                        <a href="'.get_the_permalink().'" title="'.get_the_title( $post->ID ).'">
                                            ' . get_the_post_thumbnail($post->ID,'popular', ['class'=>'w-100 img-fluid'] ) .'
                                        </a>                                        
                                        <div class="card-body">
                                            <h6 class="card-title">
                                                <a href="'.get_the_permalink().'" title="'.get_the_title( $post->ID ).'">	'.get_the_title( $post->ID ).'</a>
                                            </h6>
                                            <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                                        </div>
                                    </div>';
						    }
                        if($x == 4)
                            {
                            echo '</div>
                                <div class="card-deck">';
                            }
                            $x++;
							endwhile;
						wp_reset_postdata();
					}
					?>






            </div>
            <div class="card-header bg-dark text-light mb-3 border-0">
                <strong>LATEST NEWS</strong>
            </div>
            <div class="card flex-xl-row mb-3 box-shadow">
                <div class="">
                    <img class="card-img-left" alt="Thumbnail [200x250]" src="https://cdn.standardmedia.co.ke/images/monday/thumb_lionel_messis_bro5a9d11c0d7d48.jpg">
                </div>

                <div class="card-body">
                    <h3 >
                        <a class="text-dark card-link" href="#">Lionel Messi’s brother arrested in gun-drama</a>
                    </h3>
                    <p class="card-text mb-auto">Lionel Messi’s brother has been accused of assaulting a police officer who tried to arrest him after he allegedly threatened a driver he had crashed into with a gun.</p>
                    <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                </div>

            </div>
            <div class="card-deck">
                <div class="card box-shadow mb-3">
                    <img class="card-img-top d-none d-lg-inline-flex" src="https://cdn.standardmedia.co.ke/images/monday/thumb_kenya_sevens_finishe5a9d200d003c0.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title">Lionel Messi’s brother arrested in gun-drama</h6>
                        <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                    </div>
                </div>
                <div class="card box-shadow mb-3">
                    <img class="card-img-top d-none d-lg-inline-flex" src="https://cdn.standardmedia.co.ke/images/monday/thumb_manchester_united_sq5a9cdb4360671.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title">Players attacked by fans after Dutch league match</h6>
                        <div class="mb-1 text-muted small"><strong class="d-inline-block mb-2 text-primary">Football</strong> Nov 12 2008</div>
                    </div>
                </div>
                <div class="card ox-shadow mb-3">
                    <img class="card-img-top d-none d-lg-inline-flex" src="https://cdn.standardmedia.co.ke/images/monday/thumb_im_a_warrior5a9cfa70a9df8.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title">Players attacked by fans after Dutch league match</h6>
                        <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card box-shadow mb-3">
                    <img class="card-img-top d-none d-lg-inline-flex" src="https://cdn.standardmedia.co.ke/images/monday/thumb_andy_murray_loses_br5a9d3f13d8c62.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title">Lionel Messi’s brother arrested in gun-drama</h6>
                        <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                    </div>
                </div>
                <div class="card box-shadow mb-3">
                    <img class="card-img-top d-none d-lg-inline-flex" src="https://cdn.standardmedia.co.ke/images/monday/thumb_ronaldo_and_ramos_ho5a9ce367881ab.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title">Players attacked by fans after Dutch league match</h6>
                        <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                    </div>
                </div>
            </div>
            <div class="card flex-xl-row mb-3 box-shadow">
                <a href="" class="">
                    <img class="card-img-left" alt="Thumbnail [200x250]" src="https://cdn.standardmedia.co.ke/images/monday/thumb_lionel_messis_bro5a9d11c0d7d48.jpg">
                </a>

                <div class="card-body">
                    <h3 >
                        <a class="text-dark card-link" href="#">Lionel Messi’s brother arrested in gun-drama</a>
                    </h3>
                    <p class="card-text mb-auto">Lionel Messi’s brother has been accused of assaulting a police officer who tried to arrest him after he allegedly threatened a driver he had crashed into with a gun.</p>
                    <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                </div>

            </div>
            <div class="card-deck">
                <div class="card box-shadow mb-3">
                    <img class="card-img-top d-none d-lg-inline-flex" src="https://cdn.standardmedia.co.ke/images/monday/thumb_kenya_sevens_finishe5a9d200d003c0.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title">Lionel Messi’s brother arrested in gun-drama</h6>
                        <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                    </div>
                </div>
                <div class="card box-shadow mb-3">
                    <img class="card-img-top d-none d-lg-inline-flex" src="https://cdn.standardmedia.co.ke/images/monday/thumb_manchester_united_sq5a9cdb4360671.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title">Players attacked by fans after Dutch league match</h6>
                        <div class="mb-1 text-muted small"><strong class="d-inline-block mb-2 text-primary">Football</strong> Nov 12 2008</div>
                    </div>
                </div>
                <div class="card ox-shadow mb-3">
                    <img class="card-img-top d-none d-lg-inline-flex" src="https://cdn.standardmedia.co.ke/images/monday/thumb_im_a_warrior5a9cfa70a9df8.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title">Players attacked by fans after Dutch league match</h6>
                        <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="card box-shadow mb-3">
                    <img class="card-img-top d-none d-lg-inline-flex" src="https://cdn.standardmedia.co.ke/images/monday/thumb_andy_murray_loses_br5a9d3f13d8c62.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title">Lionel Messi’s brother arrested in gun-drama</h6>
                        <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                    </div>
                </div>
                <div class="card box-shadow mb-3">
                    <img class="card-img-top d-none d-lg-inline-flex" src="https://cdn.standardmedia.co.ke/images/monday/thumb_ronaldo_and_ramos_ho5a9ce367881ab.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title">Players attacked by fans after Dutch league match</h6>
                        <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                    </div>
                </div>
            </div>
            <nav aria-label="page navigation" class="mx-auto">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-md-3 ">
            <div class="card-header bg-dark text-light mb-3 border-0">
                <strong>POPULAR HEADLINES</strong>
            </div>
            <div class="card box-shadow mb-3">
                <a href=""><img class="card-img-top" src="https://cdn.standardmedia.co.ke/images/sunday/thumb_rugby_sevens_vlez5a9c5dc27fdda.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <h5>
                        <a class="text-dark card-link" href="#">KPL preview: Ssimbwa, Pamzo meet for the first time since Narok bust up as Gor host Bandari</a>
                    </h5>
                    <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                </div>
            </div>
            <div class="card box-shadow mb-3">
                <a href=""><img class="card-img-top" src="https://cdn.standardmedia.co.ke/images/sunday/thumb_rugby_sevens_vlez5a9c5dc27fdda.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <h5>
                        <a class="text-dark card-link" href="#">KPL preview: Ssimbwa, Pamzo meet for the first time since Narok bust up as Gor host Bandari</a>
                    </h5>
                    <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                </div>
            </div>
            <div class="card box-shadow mb-3">
                <a href=""><img class="card-img-top" src="https://cdn.standardmedia.co.ke/images/sunday/thumb_rugby_sevens_vlez5a9c5dc27fdda.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <h5>
                        <a class="text-dark card-link" href="#">KPL preview: Ssimbwa, Pamzo meet for the first time since Narok bust up as Gor host Bandari</a>
                    </h5>
                    <div class="mb-1 text-muted small"><strong class="text-primary">Football</strong> Nov 12 2008</div>
                </div>
            </div>
            <div class="card box-shadow mb-3 ">
                <div class="card-header">
                    <strong>MORE POPULAR HEADLINES</strong>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a class="text-dark card-link h6" href="#">KPL preview: Ssimbwa, Pamzo meet for the first time since Narok bust up as Gor host Bandari</a><span class="mb-1 text-muted small d-block"><strong class=" mb-2 text-primary">Football</strong> Nov 12 2008</span></li>
                    <li class="list-group-item"><a class="text-dark card-link h6" href="#">Players attacked by fans after Dutch league match</a><span class="mb-1 text-muted small d-block"><strong class=" mb-2 text-primary">Football</strong> Nov 12 2008</span></li>
                    <li class="list-group-item"><a class="text-dark card-link h6" href="#">Players attacked by fans after Dutch league match</a><span class="mb-1 text-muted small d-block"><strong class=" mb-2 text-primary">Football</strong> Nov 12 2008</span></li>
                    <li class="list-group-item"><a class="text-dark card-link h6" href="#">Players attacked by fans after Dutch league match</a><span class="mb-1 text-muted small d-block"><strong class=" mb-2 text-primary">Football</strong> Nov 12 2008</span></li>
                    <li class="list-group-item"><a class="text-dark card-link h6" href="#">Players attacked by fans after Dutch league match</a><span class="mb-1 text-muted small d-block"><strong class=" mb-2 text-primary">Football</strong> Nov 12 2008</span></li>
                    <li class="list-group-item"><a class="text-dark card-link h6" href="#">Players attacked by fans after Dutch league match</a><span class="mb-1 text-muted small d-block"><strong class=" mb-2 text-primary">Football</strong> Nov 12 2008</span></li>
                    <li class="list-group-item"><a class="text-dark card-link h6" href="#">Players attacked by fans after Dutch league match</a><span class="mb-1 text-muted small d-block"><strong class=" mb-2 text-primary">Football</strong> Nov 12 2008</span></li>
                </ul>
            </div>
            <div class="matangazo text-center mb-3">
                <img src="https://placehold.it/300x250" alt="">
            </div>

        </div>
        <div class="col-md-3">
            <?php
                get_template_part('template_part/sidebar-tables');
            ?>
        </div>
    </div>
</main>
</div>
<?php
get_footer();
?>
