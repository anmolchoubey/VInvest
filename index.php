<html>
    <head>
        
    </head>
    <body>
            <?php
            $index_url='index.php';
            $posts_url='posts/posts.php';
            $top_posts_url='posts/topposts.php';
            $post_url='posts/post.php';
            $newpost_url='posts/newpost.php';
            $login_url='users/login.php';
            $logout_url='users/logout.php';
            $register_url='users/register.php';
            $search_url='posts/search.php';
            $contact_us_url='users/contact_us.php';

            session_start();

            include("include/navbar.php");
            include("include/bootstrap_cdn.php");
            include("include/cards.php");
            include("include/footer.php");

            if(isset($_SESSION['username'])) {
                //header("location:posts/posts.php");
            }

            ?>
    </body>
</html>




