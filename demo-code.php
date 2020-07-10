 <div class="row">
		<?php
		// Get all our posts, and start the counter
            $postNumber = 0;
            $args = array(
                'posts_per_page' => 20
            );
            $posts = get_posts($args);
            // Loop through each of our posts
            foreach ($posts as $post) {
                // If we're at the first post, or just before a post number that is divisible by three then we start a new row
                // if (($postNumber == 0) || (($postNumber+1) % 3 == 0)) {
                //     echo '<div class="row">';
                // }
                // Choose the post class based on what number post we are 

                $col_width = '';
                 if('0'==($postNumber%5) || '0'==(($postNumber-1)%5)){
                $col_width="col-md-6";
                }else {
                    $col_width .= "col-md-4";
                }

               // $col_width="col-md-4";
               //  if('0'==($postNumber%5) || '0'==(($postNumber-1)%5)){
               //  $col_width="col-md-6";
               //  }

                
                echo '<div class="'.$col_width.'">';
                // Print the post data...
                echo $postNumber. " " . $col_width;
                echo $post->post_title;
                $examplePost = get_post();

                //echo $examplePost->post_content; // Don't do this

                echo apply_filters( 'the_content', $examplePost->post_content ); // Do this instead
                               //echo $the_content; 
                echo "</div>";
                // If we are at the second post, or we're just after a post number divisible by three we are at the end of the row
                // if (($postNumber == 1) || (($postNumber-1) % 3 == 0)) {
                //     echo '</div>'; // close row tag
                // }
                $postNumber++; // Increment counter
            }
		?>

       </div>
