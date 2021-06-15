<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Profile</title>
</head>

<body>

    <?php include 'header.php' ?>

    <div class="profile-header">
        <div class="profile-info">
            <img src="./assets/img/dhia.jpg" alt="" class="profile-info-header-pic">
            <div class="profile-info-txt">
                <div class="profile-info-cta">
                    <div class="profile-username">dhiaabdelli</div>
                    <button class="edit-profile-btn">Edit Profile</button>
                    <button class="profile-settings-gear-btn"><svg aria-label="Options" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                            <path clip-rule="evenodd" d="M46.7 20.6l-2.1-1.1c-.4-.2-.7-.5-.8-1-.5-1.6-1.1-3.2-1.9-4.7-.2-.4-.3-.8-.1-1.2l.8-2.3c.2-.5 0-1.1-.4-1.5l-2.9-2.9c-.4-.4-1-.5-1.5-.4l-2.3.8c-.4.1-.8.1-1.2-.1-1.4-.8-3-1.5-4.6-1.9-.4-.1-.8-.4-1-.8l-1.1-2.2c-.3-.5-.8-.8-1.3-.8h-4.1c-.6 0-1.1.3-1.3.8l-1.1 2.2c-.2.4-.5.7-1 .8-1.6.5-3.2 1.1-4.6 1.9-.4.2-.8.3-1.2.1l-2.3-.8c-.5-.2-1.1 0-1.5.4L5.9 8.8c-.4.4-.5 1-.4 1.5l.8 2.3c.1.4.1.8-.1 1.2-.8 1.5-1.5 3-1.9 4.7-.1.4-.4.8-.8 1l-2.1 1.1c-.5.3-.8.8-.8 1.3V26c0 .6.3 1.1.8 1.3l2.1 1.1c.4.2.7.5.8 1 .5 1.6 1.1 3.2 1.9 4.7.2.4.3.8.1 1.2l-.8 2.3c-.2.5 0 1.1.4 1.5L8.8 42c.4.4 1 .5 1.5.4l2.3-.8c.4-.1.8-.1 1.2.1 1.4.8 3 1.5 4.6 1.9.4.1.8.4 1 .8l1.1 2.2c.3.5.8.8 1.3.8h4.1c.6 0 1.1-.3 1.3-.8l1.1-2.2c.2-.4.5-.7 1-.8 1.6-.5 3.2-1.1 4.6-1.9.4-.2.8-.3 1.2-.1l2.3.8c.5.2 1.1 0 1.5-.4l2.9-2.9c.4-.4.5-1 .4-1.5l-.8-2.3c-.1-.4-.1-.8.1-1.2.8-1.5 1.5-3 1.9-4.7.1-.4.4-.8.8-1l2.1-1.1c.5-.3.8-.8.8-1.3v-4.1c.4-.5.1-1.1-.4-1.3zM24 41.5c-9.7 0-17.5-7.8-17.5-17.5S14.3 6.5 24 6.5 41.5 14.3 41.5 24 33.7 41.5 24 41.5z" fill-rule="evenodd"></path>
                        </svg></button>
                </div>
                <div class="profile-info-stats">
                    <div class="profile-posts-container">
                        <div class="profile-posts-number"><b>167</b></div>
                        <div class="profile-posts-txt">posts</div>
                    </div>
                    <div class="profile-followers-container">
                        <div class="profile-followers-number"><b>480</b></div>
                        <div class="profile-followers-txt">followers</div>
                    </div>
                    <div class="profile-following-container">
                        <div class="profile-following-number"><b>277</b></div>
                        <div class="profile-following-txt">following</div>
                    </div>
                </div>
                <div class="profile-header-name"><b>Dhia Abdelli</b></div>
                <p class="profile-bio">Hannah Montana's "Rockstar" was the reason I picked up the guitar and I'm not<br>
                    even ashamed of that.<br>
                    I love it when things go wrong.</p>
            </div>
        </div>
        <div class="profile-story-highlights">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="profile-highlight">
                    <img src="./assets/img/dhia.jpg" alt="" class="profile-highlight-img">
                    <div class="profile-highlight-title">Highlight</div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="profile-posts">
        <?php for ($i = 0; $i < 6; $i++) { ?>
            <div class="profile-post-card">
                <img src="./assets/img/dhia.jpg" alt="" class="profile-post-img">
            </div>
        <?php } ?>
    </div>

    <?php include 'footer.php' ?>

</body>

</html>