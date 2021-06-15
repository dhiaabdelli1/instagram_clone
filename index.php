<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Instagram</title>
</head>

<body>
    <?php include 'header.php' ?>

    <div class="home-body-container">
        <div class="news-feed">
            <div class="stories">
                <?php
                for ($i = 0; $i < 10; $i++) { ?>
                    <div class="story">
                        <img src="./assets/img/dhia.jpg" class="story-user-img">
                        <div class="story-user-handle">dhiaabdelli</div>
                    </div>
                <?php } ?>
            </div>
            <div class="posts-feed">
                <div class="post-cards">
                    <?php
                    for ($i = 0; $i < 3; $i++) { ?>

                        <div class="post-card">
                            <div class="card-header">
                                <div class="author-info">
                                    <div class="author-img-container">
                                        <img src="./assets/img/dhia.jpg" class="author-img">
                                    </div>
                                    <div class="author-txt">
                                        <div class="author-handle"><b>dhiaabdelli</b></div>
                                        <div class="post-location">Gafsa, Tunisia</div>
                                    </div>
                                </div>
                                <button href="#" class="card-options"><svg aria-label="More options" class="_8-yf5 " fill="#262626" height="16" viewBox="0 0 48 48" width="16">
                                        <circle clip-rule="evenodd" cx="8" cy="24" fill-rule="evenodd" r="4.5"></circle>
                                        <circle clip-rule="evenodd" cx="24" cy="24" fill-rule="evenodd" r="4.5"></circle>
                                        <circle clip-rule="evenodd" cx="40" cy="24" fill-rule="evenodd" r="4.5"></circle>
                                    </svg></button>
                            </div>
                            <img src="./assets/img/test.jpg" class="card-img">
                            <div class="card-cta">
                                <div class="ig-react">
                                    <button class="like-post-btn" value="#"><svg aria-label="Like" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                                            <path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path>
                                        </svg></button>
                                    <button class="comment-post-btn" value="#"><svg aria-label="Comment" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                                            <path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path>
                                        </svg></button>
                                    <button class="share-post-btn" value="#"><svg aria-label="Share Post" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                                            <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path>
                                        </svg></button>
                                </div>
                                <button class="save-post-btn" value="#"><svg aria-label="Save" class="_8-yf5 " fill="#000" height="24" viewBox="0 0 48 48" width="24">
                                        <path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path>
                                    </svg></button>
                            </div>
                            <div class="card-reacts">
                                <img class="card-reacts-img" src="./assets/img/dhia.jpg">
                                <div class="card-reacts-txt">
                                    Liked by <b>nour_abdelli</b> and <b>120 others</b></div>
                            </div>
                            <div class="card-caption">
                                <div class="author-handle-caption">dhiaabdelli</div>
                                <div class="card-caption-txt">I like this view</div>
                            </div>
                            <div class="card-comments">
                                <div class="card-comment">
                                    <div class="card-comment-info">
                                        <div class="card-comment-author">nour_abdelli</div>
                                        <div class="card-comment-txt">Indeed! nice view!</div>
                                    </div>
                                    <div class="card-comment-like">like</div>
                                </div>
                            </div>
                            <div class="card-time">3 hours ago</div>
                            <div class="card-comment-cta">
                                <button class="emoji-btn">
                                    <svg aria-label="Emoji" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                                        <path d="M24 48C10.8 48 0 37.2 0 24S10.8 0 24 0s24 10.8 24 24-10.8 24-24 24zm0-45C12.4 3 3 12.4 3 24s9.4 21 21 21 21-9.4 21-21S35.6 3 24 3z"></path>
                                        <path d="M34.9 24c0-1.4-1.1-2.5-2.5-2.5s-2.5 1.1-2.5 2.5 1.1 2.5 2.5 2.5 2.5-1.1 2.5-2.5zm-21.8 0c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5-2.5-1.1-2.5-2.5zM24 37.3c-5.2 0-8-3.5-8.2-3.7-.5-.6-.4-1.6.2-2.1.6-.5 1.6-.4 2.1.2.1.1 2.1 2.5 5.8 2.5 3.7 0 5.8-2.5 5.8-2.5.5-.6 1.5-.7 2.1-.2.6.5.7 1.5.2 2.1 0 .2-2.8 3.7-8 3.7z"></path>
                                    </svg>
                                </button>
                                <input type="text" class="card-comment-txt-input" placeholder="Add a comment...">
                                <button class="card-comment-btn">Post</button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>

        <div class="suggestions-container">
            <div class="profile-switch">
                <div class="profile-switch-left">
                    <img src="./assets/img/dhia.jpg" class="profile-switch-pic">
                    <div class="profile-switch-info">
                        <div class="profile-switch-user">dhiaabdelli</div>
                        <div class="profile-switch-user2">Dhia Abdelli</div>
                    </div>
                </div>
                <button class="switch-btn">Switch</button>
            </div>
            <div class="suggestions-title">
                <div class="suggestions-title-txt">Suggestions For You</div>
                <button class="see-all-btn">See All</button>
            </div>
            <div class="suggested-profiles">
                <?php
                for ($i = 0; $i < 5; $i++) { ?>
                    <div class="suggested-profile">
                        <div class="suggested-profile-left">
                            <img src="./assets/img/dhia.jpg" class="suggested-profile-img">
                            <div class="suggested-profile-info">
                                <div class="suggested-profile-user">dhiaabdelli</div>
                                <div class="suggested-profile-extra-info">New to Instagram</div>
                            </div>
                        </div>
                        <button class="suggested-follow-btn">Follow</button>
                    </div>
                <?php } ?>
            </div>
            <div class="about-links">About Help Press API Jobs Privacy Terms Locations Top Accounts Hashtags Language
            </div>
            <div class="trademark-txt">© 2021 INSTAGRAM FROM FACEBOOK</div>

        </div>

    </div>

    <?php include 'footer.php' ?>
</body>

</html>