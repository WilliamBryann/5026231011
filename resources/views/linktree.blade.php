<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>adidasfootball | TikTok | Linktree</title>
        <meta name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon"
            href="https://cdn3.emoji.gg/emojis/6960-linktreelogoicon2.png"
            type="image/x-icon">
        <!-- Bootstrap 4 CSS -->
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link
            href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap"
            rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <!-- jQuery library -->
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <style>
        body {
            background: url('https://ugc.production.linktr.ee/62d8ad9c-7858-4d3c-a36c-6eaa0f42c5bc_Screenshot-2025-03-27-at-10.31.51.png') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        .logo {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            margin-top: 16px;
        }
        .top-icons {
            position: absolute;
            top: 16px;
            width: 584px;
            height: 64px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
        }
        .top-icons img {
            width: 20px;
            filter: brightness(0) invert(1);
            cursor: pointer;
        }
        .circle-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color:  rgba(0, 0, 0, 0.3);
            border: none;
            transition: background-color 0.2s ease;
        }
        .circle-btn:hover {
            background-color: rgba(0, 0, 0, 0.2);
        }
        .icon-img {
            width: 20px;
            height: 20px;
            object-fit: contain;
        }
        .logo-container {
            border-radius: 50%;
            margin-bottom: 16px;
        }
        .username {
            font-family: 'Work Sans', sans-serif;
            font-size: 20px;
            font-weight: 700;
            line-height: 1.5;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .username img {
            margin-left: 6px;
            width: 18px;
            height: 18px;
        }
        .social-icons {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0 45px 0;
        }
        .social-icons a {
            margin: 0 10px;
            text-decoration: none;
            transition: transform 0.3s ease;
        }
        .social-icons a:hover {
            transform: scale(1.15);
        }

        .social-icons img, .social-icon {
            width: 30px;
            height: 30px;
            filter: brightness(0) invert(1);
        }
        .carousel-img {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border-radius: 12px;
        }
        .latest-heading {
            margin-top: 48px;
            color: white;
            font-weight: bold;
            font-family: 'Work Sans', sans-serif;
            margin-bottom: 20px;
        }
        .container {
            max-width: 580px;
            padding: 0px;
            margin-bottom: 100px;
        }

        .latest-container {
            position: relative;
            width: 100%;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 16px;
            cursor: pointer;
            transition: box-shadow 0.3s ease;
            box-shadow: 0 0 0 rgba(0,0,0,0.9);
        }
        .latest-container:hover {
            box-shadow: -4px 4px 8px rgba(0,0,0,0.5),
                         4px 4px 8px rgba(0,0,0,0.5),
                         0 4px 8px rgba(0,0,0,0.5);
        }
        .video-container {
            position: relative;
            width: 100%;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 40px;
            cursor: pointer;
            transition: box-shadow 0.3s ease;
            box-shadow: 0 0 0 rgba(0,0,0,0.9);
        }
        .video-container:hover {
            box-shadow: -4px 4px 8px rgba(0,0,0,0.5),
                         4px 4px 8px rgba(0,0,0,0.5),
                         0 4px 8px rgba(0,0,0,0.5);
        }
        .thumbnail {
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            position: relative;
        }
        .thumbnail-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }
        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 2;
            transition: transform 0.3s ease;
        }
        .video-container:hover .play-button {
            transform: translate(-50%, -50%) scale(1.2);
        }
        .play-button::after {
            content: '';
            display: block;
            width: 0;
            height: 0;
            border-top: 7px solid transparent;
            border-left: 12px solid black;
            border-bottom: 7px solid transparent;
            margin-left: 4px;
        }
        .video-title {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px 25px 20px 25px;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            font-size: 16px;
            font-weight: bold;
            text-align: left;
            z-index: 1;
        }
        .iframe-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 3;
            display: none;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            margin-bottom: 16px;
            width: 100%;
        }

        .card-grid-item {
            text-decoration: none;
            color: white;
            width: 100%;

        }

        .custom-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            background-color: rgba(30, 30, 30, 0.6);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            width: 100%;
            padding: 8px;
            transition: box-shadow 0.3s ease;
            box-shadow: 0 0 0 rgba(0,0,0,0.9);
        }

        .custom-card:hover {
            box-shadow: -4px 4px 8px rgba(0,0,0,0.5),
                         4px 4px 8px rgba(0,0,0,0.5),
                         0 4px 8px rgba(0,0,0,0.5);
        }
        .custom-card-img-container {
            width: 100%;
            height: 320px;
            padding-bottom: 100%;
            position: relative;
            overflow: hidden;

        }
        .custom-card-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 260px;
            object-fit: cover;
            border-radius: 15px;
        }

        .custom-card-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 12px;
            color: #fff;
        }

        .custom-card-title {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
            text-align: left;
        }

        .menu-item {
            transition: box-shadow 0.2s ease;
            box-shadow: 0 0 0 rgba(0,0,0,0.9);
            cursor: pointer;
            background-color: rgba(30, 30, 30, 0.6);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border-radius: 25px;
            margin-bottom: 15px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            padding: 12px;
        }

        .menu-item:hover {
            text-decoration: none;
            box-shadow: -4px 4px 8px rgba(0,0,0,0.5),
                         4px 4px 8px rgba(0,0,0,0.5),
                         0 4px 8px rgba(0,0,0,0.5);
        }

        .menu-text {
            font-size: 16px;
            letter-spacing: 0.5px;
            font-weight: 600;
            color: white;
            text-align: center;
            flex-grow: 1;
            margin-right: 40px;
        }

        .brand-circle {
            width: 40px;
            height: 40px;
            min-width: 40px;
            border-radius: 50%;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .brand-logo {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .options-icon {
            position: absolute;
            right: 15px;
            color: rgba(255, 255, 255, 0.5);
        }

    </style>
    </head>
    <body>
        <div class="overlay text-center pt-5 mx-auto" style="left:0; right:0;">
            <div class="container mb-5">
                <!-- Top bar dengan notifikasi dan titik tiga -->
                <div class="top-icons d-flex gap-2">
                    <button class="btn btn-fade circle-btn">
                        <img
                            src="https://cdn-icons-png.flaticon.com/512/3602/3602145.png"
                            alt="Notif" class="icon-img">
                    </button>
                    <button class="btn btn-fade circle-btn">
                        <img
                            src="https://cdn-icons-png.flaticon.com/512/3018/3018442.png"
                            alt="Options" class="icon-img">
                    </button>
                </div>
                <!-- Logo dengan pembungkus blur -->
                <div class="logo-container">
                    <img
                        src="https://ugc.production.linktr.ee/s5rhI7htTlUvjZYoV5rm_JzVXXPRj879jZUAZ?io=true&size=avatar-v3_0"
                        alt="Adidas Logo" class="logo">
                </div>
                <!-- Username -->
                <div class="username">
                    @adidasfootball
                    <img
                        src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Twitter_Verified_Badge.svg"
                        alt="Verified">
                </div>
                <!-- Social Media Icons -->
                <div class="social-icons">
                    <a href="https://x.com/adidasfootball" target="_blank">
                        <svg enable-background="new 0 0 24 24"
                            viewBox="0 0 24 24" width="24" height="24"
                            class="social-icon">
                            <path
                                d="m2.538 3 7.425 9.928L2 21h1.5l7.033-7.067L16 21h5.232l-7.662-9.995 6.955-7.514h-1.5L13 10 7.77 3H2.538Zm1.994 1h2.645l12.087 16h-2.525L4.532 4Z"
                                fill="#ffffff">
                            </path>
                        </svg>
                    </a>
                    <a href="https://www.tiktok.com/@adidas" target="_blank">
                        <svg width="24" height="24" viewBox="0 0 24 24"
                            class="social-icon">
                            <path
                                d="M9.37,23.5a7.468,7.468,0,0,1,0-14.936.537.537,0,0,1,.538.5v3.8a.542.542,0,0,1-.5.5,2.671,2.671,0,1,0,2.645,2.669.432.432,0,0,1,0-.05V1a.5.5,0,0,1,.5-.5h3.787a.5.5,0,0,1,.5.5A4.759,4.759,0,0,0,21.59,5.76a.5.5,0,0,1,.5.5L22.1,10a.533.533,0,0,1-.519.515,9.427,9.427,0,0,1-4.741-1.268v6.789A7.476,7.476,0,0,1,9.37,23.5ZM8.908,9.585a6.466,6.466,0,1,0,6.93,6.447V8.326a.5.5,0,0,1,.791-.407A8.441,8.441,0,0,0,21.1,9.5l-.006-2.76A5.761,5.761,0,0,1,15.859,1.5H13.051V16.032a.458.458,0,0,1,0,.053,3.672,3.672,0,1,1-4.14-3.695Z"
                                fill="#ffffff">
                            </path>
                        </svg>
                    </a>
                    <a
                        href="https://www.youtube.com/channel/UCaQHxlbPAmh7VWRudyRkwjw"
                        target="_blank">
                        <svg width="24" height="24" viewBox="0 0 24 24"
                            class="social-icon">
                            <path
                                d="M12,20.55c-.3,0-7.279-.006-9.115-.5A3.375,3.375,0,0,1,.5,17.665,29.809,29.809,0,0,1,0,12,29.824,29.824,0,0,1,.5,6.334,3.375,3.375,0,0,1,2.885,3.948c1.836-.492,8.819-.5,9.115-.5s7.279.006,9.115.5A3.384,3.384,0,0,1,23.5,6.334,29.97,29.97,0,0,1,24,12a29.97,29.97,0,0,1-.5,5.666,3.384,3.384,0,0,1-2.388,2.386C19.279,20.544,12.3,20.55,12,20.55Zm0-16.1c-.072,0-7.146.006-8.857.464A2.377,2.377,0,0,0,1.464,6.593,29.566,29.566,0,0,0,1,12a29.566,29.566,0,0,0,.464,5.407,2.377,2.377,0,0,0,1.679,1.679c1.711.458,8.785.464,8.857.464s7.146-.006,8.857-.464a2.377,2.377,0,0,0,1.679-1.679A29.66,29.66,0,0,0,23,12a29.66,29.66,0,0,0-.464-5.407h0a2.377,2.377,0,0,0-1.679-1.679C19.146,4.456,12.071,4.45,12,4.45ZM9.7,15.95a.5.5,0,0,1-.5-.5V8.55a.5.5,0,0,1,.75-.433l5.975,3.45a.5.5,0,0,1,0,.866L9.95,15.883A.5.5,0,0,1,9.7,15.95Zm.5-6.534v5.168L14.675,12Z"
                                fill="#ffffff" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/adidas/"
                        target="_blank">
                        <svg width="24" height="24" viewBox="0 0 24 24"
                            class="social-icon">
                            <path
                                d="M4.425,1.671A2.738,2.738,0,0,0,1.5,4.4,2.71,2.71,0,0,0,4.369,7.128H4.4a2.734,2.734,0,1,0,.028-5.457ZM4.4,6.128H4.369a1.736,1.736,0,1,1,.056-3.457A1.737,1.737,0,1,1,4.4,6.128Z"></path>
                            <path
                                d="M6.541,8.431H2.253a.5.5,0,0,0-.5.5v12.9a.5.5,0,0,0,.5.5H6.541a.5.5,0,0,0,.5-.5V8.931A.5.5,0,0,0,6.541,8.431Zm-.5,12.9H2.753V9.431H6.041Z"></path>
                            <path
                                d="M17.064,8.128A4.691,4.691,0,0,0,13.7,9.362V8.931a.5.5,0,0,0-.5-.5H8.914a.5.5,0,0,0-.5.523c.053,1.183,0,12.756,0,12.873a.5.5,0,0,0,.5.5H13.2a.5.5,0,0,0,.5-.5v-7.2a2.749,2.749,0,0,1,.1-.86,1.869,1.869,0,0,1,1.737-1.254c.413,0,1.671,0,1.671,2.417v6.9a.5.5,0,0,0,.5.5H22a.5.5,0,0,0,.5-.5v-7.4C22.5,10.485,20.467,8.128,17.064,8.128Zm4.436,13.2H18.213v-6.4c0-2.973-1.673-3.417-2.671-3.417a2.83,2.83,0,0,0-2.664,1.878,3.253,3.253,0,0,0-.177,1.236v6.7H9.416c.009-2.058.04-9.654.009-11.9H12.7v1.328a.5.5,0,0,0,.92.272,3.769,3.769,0,0,1,3.443-1.9c2.819,0,4.436,1.934,4.436,5.305Z"></path>
                        </svg>
                    </a>
                    <a href="https://www.snapchat.com/add/adidasfootball"
                        target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24"
                            viewBox="0 0 16 16"
                            class="social-icon">
                            <path
                                d="M15.943 11.526c-.111-.303-.323-.465-.564-.599a1 1 0 0 0-.123-.064l-.219-.111c-.752-.399-1.339-.902-1.746-1.498a3.4 3.4 0 0 1-.3-.531c-.034-.1-.032-.156-.008-.207a.3.3 0 0 1 .097-.1c.129-.086.262-.173.352-.231.162-.104.289-.187.371-.245.309-.216.525-.446.66-.702a1.4 1.4 0 0 0 .069-1.16c-.205-.538-.713-.872-1.329-.872a1.8 1.8 0 0 0-.487.065c.006-.368-.002-.757-.035-1.139-.116-1.344-.587-2.048-1.077-2.61a4.3 4.3 0 0 0-1.095-.881C9.764.216 8.92 0 7.999 0s-1.76.216-2.505.641c-.412.232-.782.53-1.097.883-.49.562-.96 1.267-1.077 2.61-.033.382-.04.772-.036 1.138a1.8 1.8 0 0 0-.487-.065c-.615 0-1.124.335-1.328.873a1.4 1.4 0 0 0 .067 1.161c.136.256.352.486.66.701.082.058.21.14.371.246l.339.221a.4.4 0 0 1 .109.11c.026.053.027.11-.012.217a3.4 3.4 0 0 1-.295.52c-.398.583-.968 1.077-1.696 1.472-.385.204-.786.34-.955.8-.128.348-.044.743.28 1.075q.18.189.409.31a4.4 4.4 0 0 0 1 .4.7.7 0 0 1 .202.09c.118.104.102.26.259.488q.12.178.296.3c.33.229.701.243 1.095.258.355.014.758.03 1.217.18.19.064.389.186.618.328.55.338 1.305.802 2.566.802 1.262 0 2.02-.466 2.576-.806.227-.14.424-.26.609-.321.46-.152.863-.168 1.218-.181.393-.015.764-.03 1.095-.258a1.14 1.14 0 0 0 .336-.368c.114-.192.11-.327.217-.42a.6.6 0 0 1 .19-.087 4.5 4.5 0 0 0 1.014-.404c.16-.087.306-.2.429-.336l.004-.005c.304-.325.38-.709.256-1.047m-1.121.602c-.684.378-1.139.337-1.493.565-.3.193-.122.61-.34.76-.269.186-1.061-.012-2.085.326-.845.279-1.384 1.082-2.903 1.082s-2.045-.801-2.904-1.084c-1.022-.338-1.816-.14-2.084-.325-.218-.15-.041-.568-.341-.761-.354-.228-.809-.187-1.492-.563-.436-.24-.189-.39-.044-.46 2.478-1.199 2.873-3.05 2.89-3.188.022-.166.045-.297-.138-.466-.177-.164-.962-.65-1.18-.802-.36-.252-.52-.503-.402-.812.082-.214.281-.295.49-.295a1 1 0 0 1 .197.022c.396.086.78.285 1.002.338q.04.01.082.011c.118 0 .16-.06.152-.195-.026-.433-.087-1.277-.019-2.066.094-1.084.444-1.622.859-2.097.2-.229 1.137-1.22 2.93-1.22 1.792 0 2.732.987 2.931 1.215.416.475.766 1.013.859 2.098.068.788.009 1.632-.019 2.065-.01.142.034.195.152.195a.4.4 0 0 0 .082-.01c.222-.054.607-.253 1.002-.338a1 1 0 0 1 .197-.023c.21 0 .409.082.49.295.117.309-.04.56-.401.812-.218.152-1.003.638-1.18.802-.184.169-.16.3-.139.466.018.14.413 1.991 2.89 3.189.147.073.394.222-.041.464"
                                fill="#ffffff" />
                        </svg>
                    </a>
                </div>

                <!-- YouTube Video Container -->
                <div class="video-container" id="videoContainer">
                    <div class="thumbnail">
                        <img
                            src="https://img.youtube.com/vi/xdPRFjRdoGQ/maxresdefault.jpg"
                            class="thumbnail-img" id="thumbnailImg"
                            alt="Adidas Predator Video">
                        <div class="play-button" id="playButton"></div>
                        <div class="video-title d-flex flex-col align-items-center">UNDER THE TONGUE | THE UNTOLD STORY OF FOOTBALL'S MOST ICONIC BOOT
                            <i class="fa-solid fa-ellipsis-vertical "></i>
                        </div>
                        <div class="iframe-container" id="iframeContainer">
                            <iframe src frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <!-- Latest Heading -->
                <h6 class="latest-heading">LATEST ⚽</h6>

                <!-- Container Satu Letsgoooo 'PREDATOR VICTORY'-->
                <div class="latest-container" id="latestContainer">
                    <div class="thumbnail">
                        <a
                            href="https://www.adidas.com/football_boots_pack"
                            target="_blank">
                            <img
                                src="https://ugc.production.linktr.ee/ac643cb3-3e98-4f07-826e-31fa8c27ecd0_image.png?io=true&size=thumbnail-feature-v1_0"
                                class="thumbnail-img" id="thumbnailImg"
                                alt="PREDATOR VICTORY">
                        </a>
                            <div class="video-title d-flex flex-col align-items-center">PREDATOR VICTORY
                                <i class="fa-solid fa-ellipsis-vertical ml-auto"></i>
                            </div>
                    </div>
                </div>

                <!-- Container Dua 'CELESTIAL VICTORY PACK'-->
                <div class="latest-container" id="latestContainer">
                    <div class="thumbnail">
                        <a href="https://www.adidas.com/football_boots_pack/"
                            target="_blank">
                            <img
                                src="https://ugc.production.linktr.ee/613ad82a-82cb-4572-86ca-f79686bdbb60_image.png?io=true&size=thumbnail-feature-v1_0"
                                class="thumbnail-img" id="thumbnailImg"
                                alt="PREDATOR VICTORY">
                        </a>
                        <div class="video-title d-flex flex-col align-items-center">CELESTIAL VICTORY PACK
                            <i class="fa-solid fa-ellipsis-vertical ml-auto"></i>
                        </div>
                    </div>
                </div>

                <!-- Container Tiga 'KONEKTIS - UEFA WOMEN'S EURO MATCH BALL'-->
                <div class="latest-container" id="latestContainer">
                    <div class="thumbnail">
                        <a href="https://www.adidas.co.id/sport/sepak-bola.html"
                            target="_blank">
                            <img
                                src="https://ugc.production.linktr.ee/33ce9916-73bb-4146-8f9b-b01fbf519756_Screenshot-2024-12-16-at-13.57.13.png?io=true&size=thumbnail-feature-v1_0"
                                class="thumbnail-img" id="thumbnailImg"
                                alt="PREDATOR VICTORY">
                        </a>
                        <div class="video-title d-flex flex-col align-items-center">KONEKTIS - UEFA WOMEN'S EURO MATCH BALL
                            <i class="fa-solid fa-ellipsis-vertical ml-auto"></i>
                        </div>
                    </div>
                </div>

                <!-- Container Empat 'LEO MESSI'-->
                <div class="latest-container" id="latestContainer">
                    <div class="thumbnail">
                        <a href="https://www.adidas.co.id/leo_messi"
                            target="_blank">
                            <img
                                src="https://ugc.production.linktr.ee/ba11b4bd-00f0-49c5-b1da-f6e40fccdd3d_image.png?io=true&size=thumbnail-feature-v1_0"
                                class="thumbnail-img" id="thumbnailImg"
                                alt="PREDATOR VICTORY">
                        </a>
                        <div class="video-title d-flex flex-col align-items-center">LEO MESSI
                            <i class="fa-solid fa-ellipsis-vertical ml-auto"></i>
                        </div>
                    </div>
                </div>

                <!-- Container Lima 'LAMINE YAMAL'-->
                <div class="latest-container" id="latestContainer">
                    <div class="thumbnail">
                        <a href="https://www.adidas.co.id/lamine_yamal"
                            target="_blank">
                            <img
                                src="https://ugc.production.linktr.ee/30e24788-821d-4bee-8182-aea8daea7af1_FW24-GOLDEN-BOY-LAMINE-YAMAL-PLAYER-0229-crop-9x16FINAL.jpeg?io=true&size=thumbnail-feature-v1_0"
                                class="thumbnail-img" id="thumbnailImg"
                                alt="PREDATOR VICTORY">
                        </a>
                        <div class="video-title d-flex flex-col align-items-center">LAMINE YAMAL
                            <i class="fa-solid fa-ellipsis-vertical ml-auto"></i>
                        </div>
                    </div>
                </div>

                <!-- Container Enam 'JUDE BELLINGHAM'-->
                <div class="latest-container" id="latestContainer">
                    <div class="thumbnail">
                        <a href="https://go.adidas.com/ihha/ob0z9g9e"
                            target="_blank">
                            <img
                                src="https://ugc.production.linktr.ee/61ed8a2c-2ea3-43c1-9876-e48df928abcc_image.png?io=true&size=thumbnail-feature-v1_0"
                                class="thumbnail-img" id="thumbnailImg"
                                alt="PREDATOR VICTORY">
                        </a>
                        <div class="video-title d-flex flex-col align-items-center">JUDE BELLINGHAM
                            <i class="fa-solid fa-ellipsis-vertical ml-auto"></i>
                        </div>
                    </div>
                </div>

                <!-- Container Tujuh 'UFL | Play Now!'-->
                <div class="latest-container" id="latestContainer">
                    <div class="thumbnail">
                        <a href="https://promo.joinufl.com/campaign/adidas"
                            target="_blank">
                            <img
                                src="https://ugc.production.linktr.ee/2214f991-48b8-47cf-b6a9-3e668d19e629_Screenshot-2025-02-11-at-17.57.47.png?io=true&size=thumbnail-feature-v1_0"
                                class="thumbnail-img" id="thumbnailImg"
                                alt="PREDATOR VICTORY">
                        </a>
                        <div class="video-title d-flex flex-col align-items-center">UFL | Play Now
                            <i class="fa-solid fa-ellipsis-vertical ml-auto"></i>
                        </div>
                    </div>
                </div>

                <!-- Container Delapan '#Merky FC'-->
                <div class="latest-container" id="latestContainer">
                    <div class="thumbnail">
                        <a href="http://www.merkyfc.com/" target="_blank">
                            <img
                                src="https://ugc.production.linktr.ee/0135d878-519e-43e5-b4a4-6ca919cec41e_STORMZY-16X9S--13.jpeg?io=true&size=thumbnail-feature-v1_0"
                                class="thumbnail-img" id="thumbnailImg"
                                alt="PREDATOR VICTORY">
                        </a>
                        <div class="video-title d-flex flex-col align-items-center">#Merky FC
                            <i class="fa-solid fa-ellipsis-vertical ml-auto"></i>
                        </div>
                    </div>
                </div>

                <div class="card-grid mt-4">
                    <!-- Card 1 -->
                    <a href="http://www.adidas.com/clubs-football"
                        target="_blank" class="card-grid-item">
                        <div class="custom-card">
                            <div class="custom-card-img-container">
                                <img
                                    src="https://ugc.production.linktr.ee/96edae67-bc62-4916-97c0-370ffb528a70_Screenshot-2024-08-12-at-07.35.27.png?io=true&size=thumbnail-stack-v1_0"
                                    class="custom-card-img"
                                    alt="24/25 THIRD KITS">
                                <div class="custom-card-overlay">
                                    <h6 class="custom-card-title d-flex flex-col align-items-center">24/25 THIRD KITS
                                        <i class="fa-solid fa-ellipsis-vertical ml-auto"></i>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Card 2 -->
                    <a href="https://www.adidas.com/juventus" target="_blank"
                        class="card-grid-item">
                        <div class="custom-card">
                            <div class="custom-card-img-container">
                                <img
                                    src="https://ugc.production.linktr.ee/e384546e-4273-4090-81be-7213976ba850_JUVE1x1.jpeg?io=true&size=thumbnail-stack-v1_0"
                                    class="custom-card-img"
                                    alt="JUVENTUS 24/25 HOME, AND AWAY">
                                <div class="custom-card-overlay">
                                    <h6 class="custom-card-title d-flex flex-col align-items-center">JUVENTUS 24/25 HOME, AND AWAY
                                        <i class="fa-solid fa-ellipsis-vertical ml-auto"></i>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="card-grid">
                    <!-- Card 3 -->
                    <a href="https://www.adidas.com/manchester_united"
                        target="_blank" class="card-grid-item">
                        <div class="custom-card">
                            <div class="custom-card-img-container">
                                <img
                                    src="https://ugc.production.linktr.ee/b719b375-a05d-45d3-9eb7-97f0746a43ec_manuc.jpeg?io=true&size=thumbnail-stack-v1_0"
                                    class="custom-card-img"
                                    alt="MANCHESTER UNITED 24/25 HOME, AND AWAY">
                                <div class="custom-card-overlay">
                                    <h6 class="custom-card-title d-flex flex-col align-items-center">MANCHESTER UNITED 24/25 HOME, AND AWAY
                                        <i class="fa-solid fa-ellipsis-vertical ml-auto"></i>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Card 4 -->
                    <a href="https://www.adidas.com/real_madrid" target="_blank"
                        class="card-grid-item">
                        <div class="custom-card">
                            <div class="custom-card-img-container">
                                <img
                                    src="https://ugc.production.linktr.ee/6cb441ba-3694-4d24-9056-ea40a2876497_Untitled-4-Recovered-Recovered-Recovered-Recovered.jpeg?io=true&size=thumbnail-stack-v1_0"
                                    class="custom-card-img"
                                    alt="REAL MADRID CF 24/25 HOME, AND AWAY">
                                <div class="custom-card-overlay">
                                    <h6 class="custom-card-title d-flex flex-col align-items-center">REAL MADRID CF 24/25 HOME, AND AWAY
                                        <i class="fa-solid fa-ellipsis-vertical ml-auto"></i>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="card-grid">
                    <!-- Card 5 -->
                    <a href="https://www.adidas.com/arsenal" target="_blank"
                        class="card-grid-item">
                        <div class="custom-card">
                            <div class="custom-card-img-container">
                                <img
                                    src="https://ugc.production.linktr.ee/d9106179-93ce-4d3e-bdfb-86ed12fd7b36_xbn.jpeg?io=true&size=thumbnail-stack-v1_0"
                                    class="custom-card-img" alt="ARSENAL KITS">
                                <div class="custom-card-overlay">
                                    <h6 class="custom-card-title d-flex flex-col align-items-center">ARSENAL 24/25 HOME, AND AWAY
                                        <i class="fa-solid fa-ellipsis-vertical ml-auto"></i>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Card 6 -->
                    <a href="https://www.adidas.com/fc_bayern" target="_blank"
                        class="card-grid-item">
                        <div class="custom-card">
                            <div class="custom-card-img-container">
                                <img
                                    src="https://ugc.production.linktr.ee/1e580356-592e-4e94-9418-fc927d80988e_shdhsddhshd.jpeg?io=true&size=thumbnail-stack-v1_0"
                                    class="custom-card-img"
                                    alt="REAL MADRID KITS">
                                <div class="custom-card-overlay">
                                    <h6 class="custom-card-title d-flex flex-col align-items-center">FC BAYERN 24/25 HOME, AND AWAY
                                        <i class="fa-solid fa-ellipsis-vertical ml-auto"></i>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- LETSSGOO PWEB HAMPIR SELESAI LAST PART BASIC LINKTREE-->
                <h6 class="latest-heading">APPS & WEBSITE 📲</h6>

                <!-- Join Adiclub -->
                <a href="https://go.adidas.com/ihha/adiclub " target="_blank"
                    class="menu-item">
                    <div class="brand-circle">
                        <img
                            src="https://www.sleekgeek.co.za/wp-content/uploads/2023/03/Adiclub-logo.png"
                            alt="Adiclub"
                            class="brand-logo">
                    </div>
                    <span class="menu-text">JOIN ADICLUB</span>
                    <i class="fas fa-ellipsis-v options-icon"></i>
                </a>

                <!-- Adidas Football Collective -->
                <a href="https://www.adidas.com/footballcollective"
                    target="_blank"
                    class="menu-item">
                    <div class="brand-circle">
                        <img
                            src="https://ugc.production.linktr.ee/uhqC7JitRGesBGd409ON_Adidas_Webheader.png"
                            alt="Football Collective" class="brand-logo">
                    </div>
                    <span class="menu-text">ADIDAS FOOTBALL COLLECTIVE</span>
                    <i class="fas fa-ellipsis-v options-icon"></i>
                </a>

                <!-- Download Confirmed -->
                <a
                    href="https://apps.apple.com/us/app/adidas-confirmed/id1508115448"
                    target="_target"
                    class="menu-item">
                    <div class="brand-circle">
                        <img
                            src="https://play-lh.googleusercontent.com/br_cI5WSkBuFSbhkmvUfCs5kKh2OREjGxXZankmX4ZCO22Yr155edNu_JHX7xdWTuQ"
                            alt="Confirmed App"
                            class="brand-logo">
                    </div>
                    <span class="menu-text">DOWNLOAD CONFIRMED</span>
                    <i class="fas fa-ellipsis-v options-icon"></i>
                </a>

                <!-- Adidas.com -->
                <a href="https://www.adidas.com/"
                    target="_blank"
                    class="menu-item">
                    <div class="brand-circle">
                        <img
                            src="https://i0.wp.com/blog.atome.id/wp-content/uploads/2022/11/2-3-Logo-3.jpg?resize=580%2C399&ssl=1"
                            alt="Adidas"
                            class="brand-logo">
                    </div>
                    <span class="menu-text">ADIDAS.COM</span>
                    <i class="fas fa-ellipsis-v options-icon"></i>
                </a>
            </div>
        </div>

        <!-- Bootstrap 4 JS and dependencies -->
        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
        // Script untuk menjalankan video YouTube saat tombol play diklik
        document.addEventListener('DOMContentLoaded', function() {
            const videoContainer = document.getElementById('videoContainer');
            const playButton = document.getElementById('playButton');
            const thumbnailImg = document.getElementById('thumbnailImg');
            const iframeContainer = document.getElementById('iframeContainer');
            const iframe = document.querySelector('iframe');

            // ID video YouTube
            const youtubeVideoId = 'xdPRFjRdoGQ';

            // Function untuk memutar video
            function playVideo() {
                iframe.src = `https://www.youtube.com/embed/${youtubeVideoId}?autoplay=1`;
                iframeContainer.style.display = 'block';
                thumbnailImg.style.opacity = '0';
                playButton.style.display = 'none';
            }

            // Event listener untuk tombol play
            playButton.addEventListener('click', playVideo);

            // Juga bisa klik thumbnail untuk memutar video
            thumbnailImg.addEventListener('click', playVideo);
        });
    </script>
    </body>
</html>
