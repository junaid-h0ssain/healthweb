<?php
  include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
</head>
<body>
   
<section id="introduction">
    <div class="container">
        <h2>Welcome to Our Wellness Program</h2>
        <p>Discover a path to holistic well-being with our comprehensive Wellness Program. We're committed to guiding you towards a healthier and happier lifestyle.</p>
        <div class="action">
            <a href="#join" class="btn">Join Now</a>
        </div>
    </div>
</section>


<section id="activities-challenges">
    <div class="container">
        <h2>Explore Wellness Activities and Challenges</h2>
        <div class="activities">
            <div class="activity">
                <img src="img/yoga.jpg" alt="Activity 1">
                <h3>Yoga and Meditation</h3>
                <p>Join our yoga and meditation sessions to relax your mind and body, and promote inner peace and harmony.</p>
            </div>
            <div class="activity">
                <img src="img/healthcooking.jpg" alt="Activity 2">
                <h3>Healthy Cooking Classes</h3>
                <p>Learn how to prepare delicious and nutritious meals with our expert chefs in our healthy cooking classes.</p>
            </div>
            <div class="activity">
                <img src="img/outdoor.jpg" alt="Activity 3">
                <h3>Outdoor Adventures</h3>
                <p>Embark on exciting outdoor adventures such as hiking, biking, and nature walks to rejuvenate your spirit.</p>
            </div>
        </div>
    </div>
</section>




<section id="resources">
    <div class="container">
        <h2>Resources</h2>
        <div class="resource">
            <h3>Wellness Videos</h3>
            <div class="video-container">
                <iframe width="1051" height="591" src="https://www.youtube.com/embed/4ju2G3KtKNA" title="AHS: Ways to Wellness" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                 referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>





<section id="community">
    <div class="container">
        <h2>Community</h2>
        <div class="community-content">
            <div class="community-posts">
                <div class="post">
                    <div class="post-header">
                        <img src="img/community logo.jpg" alt="User Avatar">
                        <div class="post-info">
                            <h3>John Doe</h3>
                            <span class="post-date">Posted on April 13, 2024</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel dolor justo. In hac habitasse platea dictumst.</p>
                    <div class="post-actions">
                        <button class="like-button">Like</button>
                        <button class="comment-button">Comment</button>
                    </div>
                </div>
                
            </div>
            <div class="community-sidebar">
                <h3>Upcoming Events</h3>
                <ul class="event-list">
                    <li><a href="#">Community Yoga Session - April 20</a></li>
                    <li><a href="#">Wellness Workshop - April 25</a></li>
               
                </ul>
                <h3>Featured Members</h3>
                <ul class="featured-members">
                    <li><img src="img/feautred1.jpg" alt="User Avatar"></li>
                    <li><img src="img/feautred2.jpg" alt="User Avatar"></li>

                </ul>
            </div>
        </div>
    </div>
</section>
  
</body>
</html>

<?php
  include 'footer.php';
?>