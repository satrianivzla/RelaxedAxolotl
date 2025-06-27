<?php get_header(); ?>

<div class="container mt-4">
    <h2>Video Playlist from Relaxed Axolotl</h2>
    <div class="row">
        <?php
        $api_key = 'UCP4H6Oww8HKQtJIdehoflNA'; // YOUR_YOUTUBE_API_KEY
        $channel_id = 'AIzaSyBFZDwEknsw4-JGg-i6COYTf0d_nymmJVw'; // Replace with Relaxed Axolotl's channel ID
        $api_url = "https://www.googleapis.com/youtube/v3/search?key=$api_key&channelId=$channel_id&part=snippet&type=video&maxResults=6";

        $response = wp_remote_get($api_url);
        if (is_array($response) && !is_wp_error($response)) {
            $videos = json_decode(wp_remote_retrieve_body($response));
            foreach ($videos->items as $video) {
                $video_id = $video->id->videoId;
                $title = $video->snippet->title;
                $description = $video->snippet->description;
                $thumbnail = $video->snippet->thumbnails->medium->url;
                $published_date = date("F j, Y", strtotime($video->snippet->publishedAt));
                ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo esc_url($thumbnail); ?>" class="card-img-top" alt="<?php echo esc_attr($title); ?>" title="<?php echo esc_attr($title); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo esc_html($title); ?></h5>
                            <p class="card-text"><?php echo esc_html($description); ?></p>
                            <p class="text-muted">Published on: <?php echo esc_html($published_date); ?></p>
                            <a href="https://www.youtube.com/watch?v=<?php echo esc_attr($video_id); ?>" class="btn btn-primary" target="_blank">Watch the Video</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
    	   // HERE WP SHOULD SHOW A MESSAGE IN CASE THAT THERE IS NO INFO AVAILABLE OR ANY KIND OF ERROR RELATED TO FECH CONTENT
		}	
        ?>
    </div>
</div>

<?php get_footer(); ?>