<?php
include("php/connection.php");
include("php/jsfun.php");
include("php/phpfun.php");
include("php/webpcon.php");
session_start();
if (!isset($_SESSION["name"])) {
  _redirect("../");
}
$uname = $_SESSION['name'];
$m_id = $_SESSION['m_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">

    <link rel="stylesheet" href="css/styles.min.css">

    <link rel="stylesheet" href="css/vendor/simplebar.css">

    <link rel="icon" href="img/favicon.ico">
    <title>VIT CLUBS | Events</title>
</head>

<body>


    <div class="page-loader">

        <div class="page-loader-decoration">

            <svg class="icon-logo" viewBox="0 0 28 40" preserveAspectRatio="xMinYMin meet">
                <path
                    d="M27.18,24.038c-0.141-0.095-0.244-0.146-0.244-0.146l-0.005-0.049C25.489,22.783,23.103,22,23.103,22c1.542,0,2.582-0.563,3.501-1.334c-0.049-0.055,0.7-0.666,0.7-0.666c0.146-8.251-4.477-12.745-7.001-14.667C18.15,9.564,16.802,14,16.802,14c-0.219-4.426,0.243-8.072,0.7-10.667c-0.85-0.452-1.956-0.698-2.296-1.537C14.865,0.957,14.015,0,14.015,0L14,0.014L13.985,0c0,0-0.85,0.957-1.19,1.796c-0.34,0.839-1.445,1.085-2.295,1.537C10.957,5.928,11.418,9.574,11.2,14c0,0-1.349-4.436-3.501-8.667C5.174,7.255,0.551,11.749,0.697,20c0,0,0.75,0.611,0.701,0.666C2.316,21.437,3.357,22,4.898,22c0,0-2.387,0.783-3.829,1.844l-0.005,0.049c0,0-0.104,0.051-0.244,0.146c-0.48,0.397-0.806,0.828-0.819,1.269c-0.023,0.521,0.263,1.181,1.233,1.973c0,0,0.136,9.259,9.69,11.29c0,0,0.212,0.815,0.975,1.431L14,38l2.102,2c0.763-0.615,0.975-1.431,0.975-1.431c9.555-2.031,9.689-11.29,9.689-11.29c0.971-0.792,1.256-1.451,1.233-1.973C27.986,24.866,27.659,24.436,27.18,24.038z M4.198,26c2.362,0.121,3.517,1.473,5.602,4c0.799,0.969,2.059,0.83,2.059,0.83L11.899,34C5.249,34,4.198,26,4.198,26z M14,28.162l-2.97-2.828l2.101-2.001l-2.101-2l2.101-2l-2.101-2L14,14.505l2.972,2.828l-2.102,2l2.102,2l-2.102,2l2.102,2.001L14,28.162z M16.102,34l0.041-3.17c0,0,1.26,0.139,2.059-0.83c2.085-2.527,3.239-3.879,5.602-4C23.803,26,22.752,34,16.102,34z M13.3,26h1.4v-1.333h-1.4V26z M13.3,22h1.4v-1.334h-1.4V22z M13.3,18h1.4v-1.333h-1.4V18z" />
            </svg>

        </div>



        <div class="page-loader-info">

            <p class="page-loader-info-title">VIT CLUBS</p>



            <p class="page-loader-info-text">Loading...</p>

        </div>



        <div class="page-loader-indicator loader-bars">
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
        </div>

    </div>



    <nav id="navigation-widget-small" class="navigation-widget navigation-widget-desktop closed sidebar left delayed">

        <a class="user-avatar small no-outline online" href="#">

            <div class="user-avatar-content">

                <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg"></div>

            </div>



            <div class="user-avatar-progress">

                <div class="hexagon-progress-40-44"></div>

            </div>



            <div class="user-avatar-progress-border">

                <div class="hexagon-border-40-44"></div>

            </div>



            <div class="user-avatar-badge">

                <div class="user-avatar-badge-border">

                    <div class="hexagon-22-24"></div>

                </div>



                <div class="user-avatar-badge-content">

                    <div class="hexagon-dark-16-18"></div>

                </div>



                <p class="user-avatar-badge-text">21</p>

            </div>

        </a>



        <ul class="menu small">







            <!-- <li class="menu-item">
        
        <a class="menu-item-link text-tooltip-tfr" href="#" data-title="Clubs">
          
          <svg class="menu-item-link-icon icon-group">
            <use xlink:href="#svg-group"></use>
          </svg>
          
        </a>
        
      </li> -->



            <li class="menu-item">

                <a class="menu-item-link text-tooltip-tfr" href="members.php" data-title="Members">

                    <svg class="menu-item-link-icon icon-members">
                        <use xlink:href="#svg-members"></use>
                    </svg>

                </a>

            </li>





            </li>








            <li class="menu-item active">

                <a class="menu-item-link text-tooltip-tfr" href="events.php" data-title="Events">

                    <svg class="menu-item-link-icon icon-events">
                        <use xlink:href="#svg-events"></use>
                    </svg>

                </a>

            </li>








        </ul>

    </nav>



    <nav id="navigation-widget" class="navigation-widget navigation-widget-desktop sidebar left hidden" data-simplebar>

        <figure class="navigation-widget-cover liquid">
            <img src="img/cover/01.jpg" alt="cover-01">
        </figure>



        <div class="user-short-description">

            <a class="user-short-description-avatar user-avatar medium" href="#">

                <div class="user-avatar-border">

                    <div class="hexagon-120-132"></div>

                </div>



                <div class="user-avatar-content">

                    <div class="hexagon-image-82-90" data-src="img/avatar/01.jpg"></div>

                </div>



                <div class="user-avatar-progress">

                    <div class="hexagon-progress-100-110"></div>

                </div>



                <div class="user-avatar-progress-border">

                    <div class="hexagon-border-100-110"></div>

                </div>



                <div class="user-avatar-badge">

                    <div class="user-avatar-badge-border">

                        <div class="hexagon-32-36"></div>

                    </div>



                    <div class="user-avatar-badge-content">

                        <div class="hexagon-dark-26-28"></div>

                    </div>



                    <p class="user-avatar-badge-text">21</p>

                </div>

            </a>



            <p class="user-short-description-title"><a href="#"><?php echo $uname; ?></a></p>
            <p class="user-short-description-title"><a href="#"><?php echo $m_id; ?></a></p>






            <ul class="menu">




                <li class="menu-item">

                    <a class="menu-item-link" href="#">

                        <svg class="menu-item-link-icon icon-group">
                            <use xlink:href="#svg-group"></use>
                        </svg>

                        Clubs
                    </a>

                </li>



                <li class="menu-item">

                    <a class="menu-item-link" href="members.php">

                        <svg class="menu-item-link-icon icon-members">
                            <use xlink:href="#svg-members"></use>
                        </svg>

                        Members
                    </a>

                </li>











                <li class="menu-item active">

                    <a class="menu-item-link" href="events.php">

                        <svg class="menu-item-link-icon icon-events">
                            <use xlink:href="#svg-events"></use>
                        </svg>

                        Events
                    </a>

                </li>









            </ul>

    </nav>



    <nav id="navigation-widget-mobile" class="navigation-widget navigation-widget-mobile sidebar left hidden"
        data-simplebar>

        <div class="navigation-widget-close-button">

            <svg class="navigation-widget-close-button-icon icon-back-arrow">
                <use xlink:href="#svg-back-arrow"></use>
            </svg>

        </div>



        <div class="navigation-widget-info-wrap">

            <div class="navigation-widget-info">

                <a class="user-avatar small no-outline" href="#">

                    <div class="user-avatar-content">

                        <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg"></div>

                    </div>



                    <div class="user-avatar-progress">

                        <div class="hexagon-progress-40-44"></div>

                    </div>



                    <div class="user-avatar-progress-border">

                        <div class="hexagon-border-40-44"></div>

                    </div>



                    <div class="user-avatar-badge">

                        <div class="user-avatar-badge-border">

                            <div class="hexagon-22-24"></div>

                        </div>



                        <div class="user-avatar-badge-content">

                            <div class="hexagon-dark-16-18"></div>

                        </div>



                        <p class="user-avatar-badge-text">21</p>

                    </div>

                </a>



                <p class="navigation-widget-info-title"><a href="#">Marina Valentine</a></p>



                <p class="navigation-widget-info-text">Welcome Back!</p>

            </div>



            <p class="navigation-widget-info-button button small secondary">Logout</p>

        </div>



        <p class="navigation-widget-section-title">Sections</p>



        <ul class="menu">







            <li class="menu-item">

                <a class="menu-item-link" href="#">

                    <svg class="menu-item-link-icon icon-group">
                        <use xlink:href="#svg-group"></use>
                    </svg>

                    Clubs
                </a>

            </li>



            <li class="menu-item">

                <a class="menu-item-link" href="members.php">

                    <svg class="menu-item-link-icon icon-members">
                        <use xlink:href="#svg-members"></use>
                    </svg>

                    Members
                </a>

            </li>




            <li class="menu-item active">

                <a class="menu-item-link" href="events.php">

                    <svg class="menu-item-link-icon icon-events">
                        <use xlink:href="#svg-events"></use>
                    </svg>

                    Events
                </a>

            </li>



        </ul>



        <p class="navigation-widget-section-title">My Profile</p>



        <a class="navigation-widget-section-link" href="hub-profile-info.html">Profile Info</a>



        <a class="navigation-widget-section-link" href="hub-profile-social.html">Social &amp; Stream</a>



        <a class="navigation-widget-section-link" href="hub-profile-notifications.html">Notifications</a>



        <a class="navigation-widget-section-link" href="hub-profile-messages.html">Messages</a>



        <a class="navigation-widget-section-link" href="hub-profile-requests.html">Friend Requests</a>



        <p class="navigation-widget-section-title">Account</p>



        <a class="navigation-widget-section-link" href="hub-account-info.html">Account Info</a>



        <a class="navigation-widget-section-link" href="hub-account-password.html">Change Password</a>



        <a class="navigation-widget-section-link" href="hub-account-settings.html">General Settings</a>



        <p class="navigation-widget-section-title">Clubs</p>



        <a class="navigation-widget-section-link" href="hub-group-management.html">Manage Clubs</a>



        <a class="navigation-widget-section-link" href="hub-group-invitations.html">Invitations</a>



        <p class="navigation-widget-section-title">My Store</p>



        <a class="navigation-widget-section-link" href="hub-store-account.html">My Account <span
                class="highlighted">$250,32</span></a>



        <a class="navigation-widget-section-link" href="hub-store-statement.html">Sales Statement</a>



        <a class="navigation-widget-section-link" href="hub-store-items.html">Manage Items</a>



        <a class="navigation-widget-section-link" href="hub-store-downloads.html">Downloads</a>



        <p class="navigation-widget-section-title">Main Links</p>



        <a class="navigation-widget-section-link" href="home.php">Home</a>



        <a class="navigation-widget-section-link" href="#">About Us</a>



        <a class="navigation-widget-section-link" href="#">Contact Us</a>



        <a class="navigation-widget-section-link" href="#">About Us</a>



        <a class="navigation-widget-section-link" href="#">Our Blog</a>



        <a class="navigation-widget-section-link" href="#">Contact Us</a>



        <a class="navigation-widget-section-link" href="#">Privacy Policy</a>

    </nav>




    <header class="header">

        <div class="header-actions">

            <div class="header-brand">





                <h1 class="header-brand-text">VIT CLUBS</h1>

            </div>

        </div>



        <div class="header-actions">

            <div class="sidemenu-trigger navigation-widget-trigger">

                <svg class="icon-grid">
                    <use xlink:href="#svg-grid"></use>
                </svg>

            </div>



            <div class="mobilemenu-trigger navigation-widget-mobile-trigger">

                <div class="burger-icon inverted">

                    <div class="burger-icon-bar"></div>



                    <div class="burger-icon-bar"></div>



                    <div class="burger-icon-bar"></div>

                </div>

            </div>



            <nav class="navigation">

                <ul class="menu-main">

                    <li class="menu-main-item">

                        <a class="menu-main-item-link" href="home.php">Home</a>

                    </li>



                    <li class="menu-main-item">

                        <a class="menu-main-item-link" href="#">About Us</a>

                    </li>



                    <li class="menu-main-item">

                        <a class="menu-main-item-link" href="#">Contact Us</a>

                    </li>



            </nav>

        </div>



        <div class="header-actions search-bar">

            <div class="interactive-input dark">
                <input type="text" id="search-main" name="search_main" placeholder="Search here for Clubs">

                <div class="interactive-input-icon-wrap">

                    <svg class="interactive-input-icon icon-magnifying-glass">
                        <use xlink:href="#svg-magnifying-glass"></use>
                    </svg>

                </div>



                <div class="interactive-input-action">

                    <svg class="interactive-input-action-icon icon-cross-thin">
                        <use xlink:href="#svg-cross-thin"></use>
                    </svg>

                </div>

            </div>



            <div class="dropdown-box padding-bottom-small header-search-dropdown">

                <div class="dropdown-box-category">

                    <p class="dropdown-box-category-title">Members</p>

                </div>





                <a class="dropdown-box-button primary" href="hub-profile-messages.html">View all Messages</a>

            </div>

        </div>



        <div class="action-list-item-wrap">

            <div class="action-list-item unread header-dropdown-trigger">

                <svg class="action-list-item-icon icon-notification">
                    <use xlink:href="#svg-notification"></use>
                </svg>

            </div>



            <div class="dropdown-box header-dropdown">

                <div class="dropdown-box-header">

                    <p class="dropdown-box-header-title">Notifications</p>



                    <div class="dropdown-box-header-actions">

                        <p class="dropdown-box-header-action">Mark all as Read</p>



                        <p class="dropdown-box-header-action">Settings</p>

                    </div>

                </div>



                <div class="dropdown-box-list" data-simplebar>

                    <div class="dropdown-box-list-item unread">

                        <div class="user-status notification">

                            <a class="user-status-avatar" href="#">

                                <div class="user-avatar small no-outline">

                                    <div class="user-avatar-content">

                                        <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>

                                    </div>



                                    <div class="user-avatar-progress">

                                        <div class="hexagon-progress-40-44"></div>

                                    </div>



                                    <div class="user-avatar-progress-border">

                                        <div class="hexagon-border-40-44"></div>

                                    </div>



                                    <div class="user-avatar-badge">

                                        <div class="user-avatar-badge-border">

                                            <div class="hexagon-22-24"></div>

                                        </div>



                                        <div class="user-avatar-badge-content">

                                            <div class="hexagon-dark-16-18"></div>

                                        </div>



                                        <p class="user-avatar-badge-text">16</p>

                                    </div>

                                </div>

                            </a>



                            <p class="user-status-title"><a class="bold" href="#">Pankaj </a> posted a comment on your
                                <a class="highlighted" href="#">post</a>
                            </p>



                            <p class="user-status-timestamp">2 minutes ago</p>



                            <div class="user-status-icon">

                                <svg class="icon-comment">
                                    <use xlink:href="#svg-comment"></use>
                                </svg>

                            </div>

                        </div>

                    </div>



                    <div class="dropdown-box-list-item">

                        <div class="user-status notification">

                            <a class="user-status-avatar" href="#">

                                <div class="user-avatar small no-outline">

                                    <div class="user-avatar-content">

                                        <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>

                                    </div>



                                    <div class="user-avatar-progress">

                                        <div class="hexagon-progress-40-44"></div>

                                    </div>



                                    <div class="user-avatar-progress-border">

                                        <div class="hexagon-border-40-44"></div>

                                    </div>



                                    <div class="user-avatar-badge">

                                        <div class="user-avatar-badge-border">

                                            <div class="hexagon-22-24"></div>

                                        </div>



                                        <div class="user-avatar-badge-content">

                                            <div class="hexagon-dark-16-18"></div>

                                        </div>



                                        <p class="user-avatar-badge-text">26</p>

                                    </div>

                                </div>

                            </a>



                            <p class="user-status-title"><a class="bold" href="#">Stuti Gupta</a> left a like <img
                                    class="reaction" src="img/reaction/like.png" alt="reaction-like"> reaction on your
                                <a class="highlighted" href="#">post</a>
                            </p>



                            <p class="user-status-timestamp">17 minutes ago</p>



                            <div class="user-status-icon">

                                <svg class="icon-thumbs-up">
                                    <use xlink:href="#svg-thumbs-up"></use>
                                </svg>

                            </div>

                        </div>

                    </div>



                    <div class="dropdown-box-list-item">

                        <div class="user-status notification">

                            <a class="user-status-avatar" href="#">

                                <div class="user-avatar small no-outline">

                                    <div class="user-avatar-content">

                                        <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>

                                    </div>



                                    <div class="user-avatar-progress">

                                        <div class="hexagon-progress-40-44"></div>

                                    </div>



                                    <div class="user-avatar-progress-border">

                                        <div class="hexagon-border-40-44"></div>

                                    </div>



                                    <div class="user-avatar-badge">

                                        <div class="user-avatar-badge-border">

                                            <div class="hexagon-22-24"></div>

                                        </div>



                                        <div class="user-avatar-badge-content">

                                            <div class="hexagon-dark-16-18"></div>

                                        </div>



                                        <p class="user-avatar-badge-text">13</p>

                                    </div>

                                </div>

                            </a>



                            <p class="user-status-title"><a class="bold" href="#">Vinayak Singh</a> posted a comment on
                                your <a class="highlighted" href="profile-photos.html">post</a></p>



                            <p class="user-status-timestamp">31 minutes ago</p>



                            <div class="user-status-icon">

                                <svg class="icon-comment">
                                    <use xlink:href="#svg-comment"></use>
                                </svg>

                            </div>

                        </div>

                    </div>



                    <div class="dropdown-box-list-item">

                        <div class="user-status notification">

                            <a class="user-status-avatar" href="#">

                                <div class="user-avatar small no-outline">

                                    <div class="user-avatar-content">

                                        <div class="hexagon-image-30-32" data-src="img/avatar/10.jpg"></div>

                                    </div>



                                    <div class="user-avatar-progress">

                                        <div class="hexagon-progress-40-44"></div>

                                    </div>



                                    <div class="user-avatar-progress-border">

                                        <div class="hexagon-border-40-44"></div>

                                    </div>



                                    <div class="user-avatar-badge">

                                        <div class="user-avatar-badge-border">

                                            <div class="hexagon-22-24"></div>

                                        </div>



                                        <div class="user-avatar-badge-content">

                                            <div class="hexagon-dark-16-18"></div>

                                        </div>



                                        <p class="user-avatar-badge-text">5</p>

                                    </div>

                                </div>

                            </a>



                            <p class="user-status-title"><a class="bold" href="#">Shivani Jain</a> left a love <img
                                    class="reaction" src="img/reaction/love.png" alt="reaction-love"> reaction on your
                                <a class="highlighted" href="#">post</a>
                            </p>



                            <p class="user-status-timestamp">2 hours ago</p>



                            <div class="user-status-icon">

                                <svg class="icon-thumbs-up">
                                    <use xlink:href="#svg-thumbs-up"></use>
                                </svg>

                            </div>

                        </div>

                    </div>



                    <div class="dropdown-box-list-item">

                        <div class="user-status notification">

                            <a class="user-status-avatar" href="#">

                                <div class="user-avatar small no-outline">

                                    <div class="user-avatar-content">

                                        <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>

                                    </div>



                                    <div class="user-avatar-progress">

                                        <div class="hexagon-progress-40-44"></div>

                                    </div>



                                    <div class="user-avatar-progress-border">

                                        <div class="hexagon-border-40-44"></div>

                                    </div>



                                    <div class="user-avatar-badge">

                                        <div class="user-avatar-badge-border">

                                            <div class="hexagon-22-24"></div>

                                        </div>



                                        <div class="user-avatar-badge-content">

                                            <div class="hexagon-dark-16-18"></div>

                                        </div>



                                        <p class="user-avatar-badge-text">12</p>

                                    </div>

                                </div>

                            </a>



                            <p class="user-status-title"><a class="bold" href="#">Kanika Bisht</a> posted a comment on
                                your <a class="highlighted" href="#">post</a></p>



                            <p class="user-status-timestamp">3 hours ago</p>



                            <div class="user-status-icon">

                                <svg class="icon-comment">
                                    <use xlink:href="#svg-comment"></use>
                                </svg>

                            </div>

                        </div>

                    </div>

                </div>



                <a class="dropdown-box-button secondary" href="hub-profile-notifications.html">View all
                    Notifications</a>

            </div>

        </div>

        </div>



        <div class="">
            <a class="navigation-widget-section-link" href="php/logout.php" style="color: white;">Logout</a>
        </div>

        </div>

        </div>




    </header>



    <aside class="floaty-bar">

        <div class="bar-actions">

            <div class="progress-stat">

                <div class="bar-progress-wrap">

                    <p class="bar-progress-info">Next: <span class="bar-progress-text"></span></p>

                </div>



                <div id="logged-user-level-cp" class="progress-stat-bar"></div>

            </div>

        </div>



        <div class="bar-actions">

            <div class="action-list dark">

                <a class="action-list-item" href="marketplace-cart.html">

                    <svg class="action-list-item-icon icon-shopping-bag">
                        <use xlink:href="#svg-shopping-bag"></use>
                    </svg>

                </a>



                <a class="action-list-item" href="hub-profile-requests.html">

                    <svg class="action-list-item-icon icon-friend">
                        <use xlink:href="#svg-friend"></use>
                    </svg>

                </a>



                <a class="action-list-item" href="hub-profile-messages.html">

                    <svg class="action-list-item-icon icon-messages">
                        <use xlink:href="#svg-messages"></use>
                    </svg>

                </a>



                <a class="action-list-item unread" href="hub-profile-notifications.html">

                    <svg class="action-list-item-icon icon-notification">
                        <use xlink:href="#svg-notification"></use>
                    </svg>

                </a>

            </div>




        </div>

    </aside>



    <div class="content-grid">

        <div class="section-banner">

            <img class="section-banner-icon" src="img/banner/events-icon.png" alt="events-icon">



            <p class="section-banner-title">Events</p>



            <p class="section-banner-text">Create events or reminders of VIT Clubs for community!</p>

        </div>



        <div class="section-header">

            <div class="section-header-info">

                <p class="section-pretitle">Get a quick look!</p>



                <h2 class="section-title">Events Calendar</h2>

            </div>

        </div>



        <div class="section-filters-bar v6">

            <div class="section-filters-bar-actions">

                <form class="form">

                    <div class="form-item split">

                        <div class="form-input small">
                            <label for="events-search">Search Events</label>
                            <input type="text" id="events-search" name="events_search">
                        </div>



                        <button class="button primary">

                            <svg class="icon-magnifying-glass">
                                <use xlink:href="#svg-magnifying-glass"></use>
                            </svg>

                        </button>

                    </div>

                </form>

            </div>



            <div class="section-filters-bar-actions">

                <p class="button secondary popup-event-creation-trigger">+ Add New Event</p>

            </div>

        </div>



        <div class="calendar-widget">

            <div class="calendar-widget-header">

                <div class="calendar-widget-header-actions">

                    <div class="slider-controls">

                        <div class="slider-control left">

                            <svg class="slider-control-icon icon-big-arrow">
                                <use xlink:href="#svg-big-arrow"></use>
                            </svg>

                        </div>



                        <div class="slider-control right">

                            <svg class="slider-control-icon icon-big-arrow">
                                <use xlink:href="#svg-big-arrow"></use>
                            </svg>

                        </div>

                    </div>



                    <p class="calendar-widget-title">November 2023</p>

                </div>



                <div class="calendar-widget-header-actions">

                    <div class="view-actions">

                        <a class="view-action text-tooltip-tft-medium active" href="events.php" data-title="Monthly">

                            <svg class="view-action-icon icon-events-monthly">
                                <use xlink:href="#svg-events-monthly"></use>
                            </svg>

                        </a>



                        <a class="view-action text-tooltip-tft-medium" href="events-weekly.html" data-title="Weekly">

                            <svg class="view-action-icon icon-events-weekly">
                                <use xlink:href="#svg-events-weekly"></use>
                            </svg>

                        </a>



                        <a class="view-action text-tooltip-tft-medium" href="events-daily.html" data-title="Daily">

                            <svg class="view-action-icon icon-events-daily">
                                <use xlink:href="#svg-events-daily"></use>
                            </svg>

                        </a>

                    </div>

                </div>

            </div>



            <div class="calendar full">

                <div class="calendar-week">

                    <p class="calendar-week-day"><span class="week-day-short">Sun</span><span
                            class="week-day-long">Sunday</span></p>



                    <p class="calendar-week-day"><span class="week-day-short">Mon</span><span
                            class="week-day-long">Monday</span></p>



                    <p class="calendar-week-day"><span class="week-day-short">Tue</span><span
                            class="week-day-long">Tuesday</span></p>



                    <p class="calendar-week-day"><span class="week-day-short">Wed</span><span
                            class="week-day-long">Wednesday</span></p>



                    <p class="calendar-week-day"><span class="week-day-short">Thu</span><span
                            class="week-day-long">Thursday</span></p>



                    <p class="calendar-week-day"><span class="week-day-short">Fri</span><span
                            class="week-day-long">Friday</span></p>



                    <p class="calendar-week-day"><span class="week-day-short">Sat</span><span
                            class="week-day-long">Saturday</span></p>

                </div>



                <div class="calendar-days">

                    <div class="calendar-day-row">

                        <div class="calendar-day inactive">

                            <p class="calendar-day-number">29</p>

                        </div>



                        <div class="calendar-day inactive">

                            <p class="calendar-day-number">30</p>

                        </div>



                        <div class="calendar-day inactive">

                            <p class="calendar-day-number">31</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">1</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">2</p>



                            <div class="calendar-day-events">




                                <p class="calendar-day-event secondary popup-event-information-trigger"><span
                                        class="calendar-day-event-text">Sara's Show</span></p>





                            </div>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">3</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">4</p>

                        </div>

                    </div>



                    <div class="calendar-day-row">

                        <div class="calendar-day">

                            <p class="calendar-day-number">5</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">6</p>
                            <div class="calendar-day-events">




                                <p class="calendar-day-event secondary popup-event-information-trigger"><span
                                        class="calendar-day-event-text">Diwali Festival</span></p>





                            </div>

                        </div>



                        <div class="calendar-day current">

                            <p class="calendar-day-number">7</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">8</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">9</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">10</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">11</p>

                        </div>

                    </div>



                    <div class="calendar-day-row">

                        <div class="calendar-day">

                            <p class="calendar-day-number">12</p>

                        </div>



                        <div class="calendar-day active">

                            <p class="calendar-day-number">13</p>



                            <div class="calendar-day-events">

                                <p class="calendar-day-event secondary popup-event-information-trigger"><span
                                        class="calendar-day-event-text">Rock Music Fest</span></p>



                                <p class="calendar-day-event primary popup-event-information-trigger"><span
                                        class="calendar-day-event-text">Streaming Party</span></p>

                            </div>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">14</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">15</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">16</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">17</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">18</p>

                        </div>

                    </div>



                    <div class="calendar-day-row">

                        <div class="calendar-day">

                            <p class="calendar-day-number">19</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">20</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">21</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">22</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">23</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">24</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">25</p>

                        </div>

                    </div>



                    <div class="calendar-day-row">

                        <div class="calendar-day">

                            <p class="calendar-day-number">26</p>



                            <div class="calendar-day-events">

                                <p class="calendar-day-event primary popup-event-information-trigger"><span
                                        class="calendar-day-event-text">CosWorld 2019 After...</span></p>

                            </div>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">27</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">28</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">29</p>

                        </div>



                        <div class="calendar-day">

                            <p class="calendar-day-number">30</p>

                        </div>



                        <div class="calendar-day inactive">

                            <p class="calendar-day-number">1</p>

                        </div>



                        <div class="calendar-day inactive">

                            <p class="calendar-day-number">2</p>

                        </div>

                    </div>

                </div>

            </div>



            <div class="calendar-events-preview">

                <p class="calendar-events-preview-title" id="datet">
                    <?php
        $today = date('Y-m-d');
        // date
        $dateStr = $today;
        $timestamp = strtotime($dateStr);
        $dayOfWeek = date("l", $timestamp);
        $month = date("F", $timestamp);
        $day = date("jS", $timestamp);
        $year = date("Y", $timestamp);
        $formattedDate = $dayOfWeek . ", " . $month . " " . $day . " - " . $year;

        $sql = "SELECT * FROM `event` WHERE date = '$today'";
        $result = mysqli_query($conn, $sql);
        echo "$formattedDate";
        while ($row = mysqli_fetch_array($result)) {
          $time_s = $row["start_time"];
          $time_e = $row["end_time"];

          echo ' 
        </p>
        <div class="calendar-event-preview-list">
          <div class="calendar-event-preview secondary">
            <div class="calendar-event-preview-start-time">
              <p class="calendar-event-preview-start-time-title">' . date("h:i", strtotime($time_s)) . '</p>
              <p class="calendar-event-preview-start-time-text">' . date("A", strtotime($time_s)) . '</p>
            </div>
            <div class="calendar-event-preview-info">
              <p class="calendar-event-preview-title popup-event-information-trigger">' . $row["name"] . '</p>
              <p class="calendar-event-preview-text">' . $row["description"] . '</p>
              <p class="calendar-event-preview-time"><span class="bold">' . date("h:i", strtotime($time_s)) . '</span> ' . date("A", strtotime($time_s)) . '-<span class="bold">' . date("h:i", strtotime($time_e)) . '</span> ' . date("A", strtotime($time_e)) . '</p>
            </div>
          </div>
          ';
        } ?>
            </div>
        </div>
    </div>
    <div class="section-header">
        <div class="section-header-info">
            <p class="section-pretitle">See what's next!</p>
            <h2 class="section-title">Upcoming Events</h2>
        </div>
    </div>



    <div class="grid grid-3-3-3-3 centered">

        <div class="event-preview">

            <figure class="event-preview-cover liquid">
                <img src="img/cover/47.jpg" alt="cover-47">
            </figure>



            <div class="event-preview-info">

                <div class="event-preview-info-top">

                    <div class="date-sticker">

                        <p class="date-sticker-day">13</p>



                        <p class="date-sticker-month">Aug</p>

                    </div>



                    <p class="event-preview-title popup-event-information-trigger">Rock Music Fest</p>



                    <p class="event-preview-timestamp"><span class="bold">8:30</span> AM</p>



                    <p class="event-preview-text">Hi Neko! I'm creating this event to invite you to have breakfast
                        before work. Meet me at Coffebucks.</p>

                </div>



                <div class="event-preview-info-bottom">

                    <div class="decorated-text">

                        <svg class="decorated-text-icon icon-pin">
                            <use xlink:href="#svg-pin"></use>
                        </svg>



                        <p class="decorated-text-content">Downtown Coffeebucks</p>

                    </div>



                    <div class="meta-line">

                        <div class="meta-line-list user-avatar-list">

                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/05.jpg"></div>

                                </div>

                            </div>



                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/01.jpg"></div>

                                </div>

                            </div>

                        </div>



                        <p class="meta-line-text">will assist</p>

                    </div>



                    <p class="button white white-tertiary">Remove from Calendar</p>

                </div>

            </div>

        </div>



        <div class="event-preview">

            <figure class="event-preview-cover liquid">
                <img src="img/cover/23.jpg" alt="cover-23">
            </figure>



            <div class="event-preview-info">

                <div class="event-preview-info-top">

                    <div class="date-sticker">

                        <p class="date-sticker-day">13</p>



                        <p class="date-sticker-month">Aug</p>

                    </div>



                    <p class="event-preview-title popup-event-information-trigger">Streaming Party</p>



                    <p class="event-preview-timestamp"><span class="bold">10:00</span> PM - <span
                            class="bold">11:30</span> PM</p>



                    <p class="event-preview-text">The biggest party for Twitch streamers! Come and join us at Shenron
                        Arena.</p>

                </div>



                <div class="event-preview-info-bottom">

                    <div class="decorated-text">

                        <svg class="decorated-text-icon icon-pin">
                            <use xlink:href="#svg-pin"></use>
                        </svg>



                        <p class="decorated-text-content">Shenron Arena</p>

                    </div>



                    <div class="meta-line">

                        <div class="meta-line-list user-avatar-list">

                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/09.jpg"></div>

                                </div>

                            </div>



                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/08.jpg"></div>

                                </div>

                            </div>



                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/12.jpg"></div>

                                </div>

                            </div>



                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/16.jpg"></div>

                                </div>

                            </div>



                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/06.jpg"></div>

                                </div>

                            </div>

                        </div>



                        <p class="meta-line-text">+31 will assist</p>

                    </div>



                    <p class="button white white-tertiary">Remove from Calendar</p>

                </div>

            </div>

        </div>



        <div class="event-preview">

            <figure class="event-preview-cover liquid">
                <img src="img/cover/33.jpg" alt="cover-33">
            </figure>



            <div class="event-preview-info">

                <div class="event-preview-info-top">

                    <div class="date-sticker">

                        <p class="date-sticker-day">26</p>



                        <p class="date-sticker-month">Aug</p>

                    </div>



                    <p class="event-preview-title popup-event-information-trigger">Rock Music Fest</p>



                    <p class="event-preview-timestamp"><span class="bold">11:00</span> PM</p>



                    <p class="event-preview-text">Join us at the CosWorld after party! We'll be eating, drinking and
                        having a great time exchanging experiences...</p>

                </div>



                <div class="event-preview-info-bottom">

                    <div class="decorated-text">

                        <svg class="decorated-text-icon icon-pin">
                            <use xlink:href="#svg-pin"></use>
                        </svg>



                        <p class="decorated-text-content">MG Auditorium </p>

                    </div>



                    <div class="meta-line">

                        <div class="meta-line-list user-avatar-list">

                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/06.jpg"></div>

                                </div>

                            </div>



                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/07.jpg"></div>

                                </div>

                            </div>



                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/02.jpg"></div>

                                </div>

                            </div>



                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/10.jpg"></div>

                                </div>

                            </div>



                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/05.jpg"></div>

                                </div>

                            </div>

                        </div>



                        <p class="meta-line-text">+24 will assist</p>

                    </div>



                    <p class="button white white-tertiary">Remove from Calendar</p>

                </div>

            </div>

        </div>



        <div class="event-preview">

            <figure class="event-preview-cover liquid">
                <img src="img/cover/40.jpg" alt="cover-40">
            </figure>



            <div class="event-preview-info">

                <div class="event-preview-info-top">

                    <div class="date-sticker">

                        <p class="date-sticker-day">9</p>



                        <p class="date-sticker-month">Sep</p>

                    </div>



                    <p class="event-preview-title popup-event-information-trigger">Artistic Painting Course</p>



                    <p class="event-preview-timestamp"><span class="bold">6:00</span> PM</p>



                    <p class="event-preview-text">Come to have a great time with us at our artistic painting course!
                        Begginers and experts welcome!</p>

                </div>



                <div class="event-preview-info-bottom">

                    <div class="decorated-text">

                        <svg class="decorated-text-icon icon-pin">
                            <use xlink:href="#svg-pin"></use>
                        </svg>



                        <p class="decorated-text-content">Xavier's Art Center</p>

                    </div>



                    <div class="meta-line">

                        <div class="meta-line-list user-avatar-list">

                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/13.jpg"></div>

                                </div>

                            </div>



                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/12.jpg"></div>

                                </div>

                            </div>



                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/11.jpg"></div>

                                </div>

                            </div>



                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/03.jpg"></div>

                                </div>

                            </div>



                            <div class="user-avatar micro no-stats">

                                <div class="user-avatar-border">

                                    <div class="hexagon-22-24"></div>

                                </div>



                                <div class="user-avatar-content">

                                    <div class="hexagon-image-18-20" data-src="img/avatar/04.jpg"></div>

                                </div>

                            </div>

                        </div>



                        <p class="meta-line-text">+17 will assist</p>

                    </div>



                    <p class="button white white-tertiary">Remove from Calendar</p>

                </div>

            </div>

        </div>

    </div>

    </div>



    <div class="popup-box small popup-event-creation">

        <div class="popup-close-button popup-event-creation-trigger">

            <svg class="popup-close-button-icon icon-cross">
                <use xlink:href="#svg-cross"></use>
            </svg>

        </div>



        <p class="popup-box-title">+ Add New Event</p>



        <form class="form" method="post" action="" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-item">
                    <div class="form-select">
                        <label for="event-category">Category</label>
                        <select id="event-category" name="event_category" required>
                            <option value="0">Big Events</option>
                            <option value="1">Small Events</option>
                            <option value="2">Gaming Events</option>
                            <option value="3">Cosplay Events</option>
                        </select>
                        <svg class="form-select-icon icon-small-arrow">
                            <use xlink:href="#svg-small-arrow"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-item">
                    <div class="form-input small">
                        <label for="event-name">Event Name</label>
                        <input type="text" id="event-name" name="event_name" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-item">
                    <div class="form-input-decorated">
                        <div class="form-input small">
                            <label for="event-location">Event Location</label>
                            <input type="text" id="event-location" name="event_location" required>
                        </div>
                        <svg class="form-input-icon icon-pin">
                            <use xlink:href="#svg-pin"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-item">
                    <div class="form-input-decorated">
                        <div class="form-input small">
                            <h6>Event Date</h6>
                            <input type="date" id="event-date" name="event_date" required>
                        </div>

                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-item">
                    <div class="form-input-decorated">
                        <div class="form-input small">
                            <h6>Start Time</h6>
                            <input type="time" id="event-time-start" name="event_time-start" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-item">
                    <div class="form-input-decorated">
                        <div class="form-input small">
                            <h6>End Time</h6>
                            <input type="time" id="event-time-end" name="event_time-end" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-item">
                    <div class="form-input small">
                        <label for="event-description">Event Description</label>
                        <textarea id="event-description" name="event_description" required></textarea>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-item">
                    <div class="form-input-decorated">
                        <div class="form-input small">
                            <h6>Event Cover Photo</h6>
                            <input type="file" accept="image/png,image/jpeg" id="event-cover-photo"
                                name="event_cover_photo" required>
                        </div>
                        <svg class="form-input-icon icon-photos">
                            <use xlink:href="#svg-photos"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="popup-box-actions medium void">
                <button class="popup-box-action full button secondary" name="Create_event">Create Event!</button>
            </div>
        </form>
    </div>

    <?php
  if (isset($_POST["Create_event"])) {
    global $conn;
    $cat = mysqli_real_escape_string($conn, $_POST['event_category']);
    $name = mysqli_real_escape_string($conn, $_POST['event_name']);
    $loc = mysqli_real_escape_string($conn, $_POST['event_location']);
    $date = $_POST['event_date'];
    $s_time = mysqli_real_escape_string($conn, $_POST['event_time-start']);
    $e_time = mysqli_real_escape_string($conn, $_POST['event_time-end']);
    $desc = mysqli_real_escape_string($conn, $_POST['event_description']);
    $tmpimg = $_FILES['event_cover_photo']['tmp_name'];
    $img_extension = "." . preg_replace('@.+\.@', '', $_FILES['event_cover_photo']['name']);
    $imgname = sql_srno();
    $imgname = "ev" . $imgname . randStr(6);
    $path = "images/events/";
    $f_upload = move_uploaded_file($tmpimg, $path . $imgname . $img_extension);
    // webpCon($path,$imgname,200,200,$img_extension);
    $imgname = $imgname . $img_extension;
    $check = mysqli_query($conn, "INSERT INTO `event`(`category`,`name`,`location`,`date`,`start_time`,`end_time`,`description`,`e_pic`) VALUES('$cat','$name','$loc','$date','$s_time','$e_time','$desc','$imgname')");
    if (!$check) {
      _alert("Event Upload Failed");
    } else {
      _alert("Event Upload Successful");
    }
    unset($_POST["Create_event"]);
  }
  function sql_srno()
  {
    global $conn;
    $sql = "SELECT * From `event` ORDER BY id DESC limit 1";
    $result = mysqli_query($conn, $sql) or die("Something went wrong");
    if (!$result) {
      _alert("Failed to fetch image name");
    }
    $row = mysqli_fetch_assoc($result);
    if (!$row) {
      return "1";
    } else {
      $row = $row['id'] + 1;
      return "$row";
    }
  }
  ?>



    <div class="popup-event popup-event-information">

        <div class="popup-close-button popup-event-information-trigger">

            <svg class="popup-close-button-icon icon-cross">
                <use xlink:href="#svg-cross"></use>
            </svg>

        </div>



        <figure class="popup-event-cover liquid">
            <img src="img/cover/33.jpg" alt="cover-33">
        </figure>



        <div class="popup-event-info">

            <p class="popup-event-title">Rock Music Fest</p>



            <div class="decorated-feature-list">

                <div class="decorated-feature">

                    <svg class="decorated-feature-icon icon-events">
                        <use xlink:href="#svg-events"></use>
                    </svg>



                    <div class="decorated-feature-info">

                        <p class="decorated-feature-title">Sunday, November 2 - 2023</p>



                        <p class="decorated-feature-text">8:30 AM</p>

                    </div>

                </div>



                <div class="decorated-feature">

                    <svg class="decorated-feature-icon icon-pin">
                        <use xlink:href="#svg-pin"></use>
                    </svg>



                    <div class="decorated-feature-info">

                        <p class="decorated-feature-title">Netaji Auditorium</p>



                        <p class="decorated-feature-text">AB-1 7th Floor</p>

                    </div>

                </div>



                <div class="decorated-feature">

                    <svg class="decorated-feature-icon icon-ticket">
                        <use xlink:href="#svg-ticket"></use>
                    </svg>



                    <div class="decorated-feature-info">

                        <p class="decorated-feature-title">Rs 1000</p>



                        <p class="decorated-feature-text">Entry Price</p>

                    </div>

                </div>

            </div>



            <p class="popup-event-subtitle">Description</p>



            <p class="popup-event-text">Join us for the Rock Music Fest! We'll be enjoying music, food, and drinks while
                sharing our experiences at the event.
            </p>



            <p class="popup-event-subtitle">Student Cordinator</p>



            <div class="user-avatar-list reverse medium">

                <div class="user-avatar smaller no-stats">

                    <div class="user-avatar-border">

                        <div class="hexagon-34-36"></div>

                    </div>



                    <div class="user-avatar-content">

                        <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>

                    </div>

                </div>



                <div class="user-avatar smaller no-stats">

                    <div class="user-avatar-border">

                        <div class="hexagon-34-36"></div>

                    </div>



                    <div class="user-avatar-content">

                        <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>

                    </div>

                </div>



                <div class="user-avatar smaller no-stats">

                    <div class="user-avatar-border">

                        <div class="hexagon-34-36"></div>

                    </div>



                    <div class="user-avatar-content">

                        <div class="hexagon-image-30-32" data-src="img/avatar/10.jpg"></div>

                    </div>

                </div>



                <div class="user-avatar smaller no-stats">

                    <div class="user-avatar-border">

                        <div class="hexagon-34-36"></div>

                    </div>



                    <div class="user-avatar-content">

                        <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>

                    </div>

                </div>



                <div class="user-avatar smaller no-stats">

                    <div class="user-avatar-border">

                        <div class="hexagon-34-36"></div>

                    </div>



                    <div class="user-avatar-content">

                        <div class="hexagon-image-30-32" data-src="img/avatar/06.jpg"></div>

                    </div>

                </div>








                <!-- <div class="user-avatar-overlay-content">
            
            <p class="user-avatar-overlay-content-text"></p>
            
          </div> -->

                </a>

            </div>



            <!-- <p class="popup-event-subtitle">Google Map</p> -->



            <!-- <div id="g-map" class="g-map"></div> -->



            <p class="popup-event-button button tertiary popup-event-information-trigger">Remove from Calendar</p>

        </div>



        <div class="content-actions">

            <div class="content-action">

                <div class="meta-line">

                    <div class="meta-line-list reaction-item-list">

                        <div class="reaction-item">

                            <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/happy.png"
                                alt="reaction-happy">



                            <div class="simple-dropdown padded reaction-item-dropdown">

                                <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/happy.png"
                                        alt="reaction-happy"> <span class="bold">Happy</span></p>



                                <p class="simple-dropdown-text">Matt Parker</p>



                                <p class="simple-dropdown-text">Vinayak Singh</p>



                                <p class="simple-dropdown-text">Shivani Jain</p>

                            </div>

                        </div>



                        <div class="reaction-item">

                            <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/love.png"
                                alt="reaction-love">



                            <div class="simple-dropdown padded reaction-item-dropdown">

                                <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/love.png"
                                        alt="reaction-love"> <span class="bold">Love</span></p>



                                <p class="simple-dropdown-text">Sandra Strange</p>

                            </div>

                        </div>



                        <div class="reaction-item">

                            <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/like.png"
                                alt="reaction-like">



                            <div class="simple-dropdown padded reaction-item-dropdown">

                                <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/like.png"
                                        alt="reaction-like"> <span class="bold">Like</span></p>



                                <p class="simple-dropdown-text">Kanika Bisht</p>



                                <p class="simple-dropdown-text">Pankaj </p>



                                <p class="simple-dropdown-text">Stuti Gupta</p>



                                <p class="simple-dropdown-text">Jett Spiegel</p>



                                <p class="simple-dropdown-text">Marcus Jhonson</p>



                                <p class="simple-dropdown-text">Jane Rodgers</p>



                                <p class="simple-dropdown-text"><span class="bold">and 2 more...</span></p>

                            </div>

                        </div>

                    </div>



                    <p class="meta-line-text">12</p>

                </div>



                <div class="meta-line">

                    <div class="meta-line-list user-avatar-list">

                        <div class="user-avatar micro no-stats">

                            <div class="user-avatar-border">

                                <div class="hexagon-22-24"></div>

                            </div>



                            <div class="user-avatar-content">

                                <div class="hexagon-image-18-20" data-src="img/avatar/09.jpg"></div>

                            </div>

                        </div>



                        <div class="user-avatar micro no-stats">

                            <div class="user-avatar-border">

                                <div class="hexagon-22-24"></div>

                            </div>



                            <div class="user-avatar-content">

                                <div class="hexagon-image-18-20" data-src="img/avatar/08.jpg"></div>

                            </div>

                        </div>



                        <div class="user-avatar micro no-stats">

                            <div class="user-avatar-border">

                                <div class="hexagon-22-24"></div>

                            </div>



                            <div class="user-avatar-content">

                                <div class="hexagon-image-18-20" data-src="img/avatar/12.jpg"></div>

                            </div>

                        </div>



                        <div class="user-avatar micro no-stats">

                            <div class="user-avatar-border">

                                <div class="hexagon-22-24"></div>

                            </div>



                            <div class="user-avatar-content">

                                <div class="hexagon-image-18-20" data-src="img/avatar/16.jpg"></div>

                            </div>

                        </div>



                        <div class="user-avatar micro no-stats">

                            <div class="user-avatar-border">

                                <div class="hexagon-22-24"></div>

                            </div>



                            <div class="user-avatar-content">

                                <div class="hexagon-image-18-20" data-src="img/avatar/06.jpg"></div>

                            </div>

                        </div>

                    </div>



                    <p class="meta-line-text">95 Participants</p>

                </div>

            </div>



            <div class="content-action">

                <div class="meta-line">

                    <p class="meta-line-link">1 Comments</p>

                </div>



                <div class="meta-line">

                    <p class="meta-line-text">0 Shares</p>

                </div>

            </div>

        </div>



        <div class="post-options">

            <div class="post-option-wrap">

                <div class="post-option reaction-options-dropdown-trigger">

                    <svg class="post-option-icon icon-thumbs-up">
                        <use xlink:href="#svg-thumbs-up"></use>
                    </svg>



                    <p class="post-option-text">React!</p>

                </div>



                <div class="reaction-options reaction-options-dropdown">

                    <div class="reaction-option text-tooltip-tft" data-title="Like">

                        <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">

                    </div>



                    <div class="reaction-option text-tooltip-tft" data-title="Love">

                        <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">

                    </div>



                    <div class="reaction-option text-tooltip-tft" data-title="Dislike">

                        <img class="reaction-option-image" src="img/reaction/dislike.png" alt="reaction-dislike">

                    </div>



                    <div class="reaction-option text-tooltip-tft" data-title="Happy">

                        <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy">

                    </div>



                    <div class="reaction-option text-tooltip-tft" data-title="Funny">

                        <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny">

                    </div>



                    <div class="reaction-option text-tooltip-tft" data-title="Wow">

                        <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">

                    </div>



                    <div class="reaction-option text-tooltip-tft" data-title="Angry">

                        <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry">

                    </div>



                    <div class="reaction-option text-tooltip-tft" data-title="Sad">

                        <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">

                    </div>

                </div>

            </div>



            <div class="post-option active">

                <svg class="post-option-icon icon-comment">
                    <use xlink:href="#svg-comment"></use>
                </svg>



                <p class="post-option-text">Comment</p>

            </div>



            <div class="post-option">

                <svg class="post-option-icon icon-share">
                    <use xlink:href="#svg-share"></use>
                </svg>



                <p class="post-option-text">Share</p>

            </div>

        </div>



        <div class="post-comment-list">

            <div class="post-comment">

                <a class="user-avatar small no-outline" href="#">

                    <div class="user-avatar-content">

                        <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>

                    </div>



                    <div class="user-avatar-progress">

                        <div class="hexagon-progress-40-44"></div>

                    </div>



                    <div class="user-avatar-progress-border">

                        <div class="hexagon-border-40-44"></div>

                    </div>



                    <div class="user-avatar-badge">

                        <div class="user-avatar-badge-border">

                            <div class="hexagon-22-24"></div>

                        </div>



                        <div class="user-avatar-badge-content">

                            <div class="hexagon-dark-16-18"></div>

                        </div>



                        <p class="user-avatar-badge-text">19</p>

                    </div>

                </a>



                <p class="post-comment-text"><a class="post-comment-text-author" href="#">Vinayak Singh</a>Can't wait to
                    see everyone at the party! Last year's was incredible and I'm hoping this year will be even better!
                </p>



                <div class="content-actions">

                    <div class="content-action">

                        <div class="meta-line">

                            <div class="meta-line-list reaction-item-list small">

                                <div class="reaction-item">

                                    <img class="reaction-image reaction-item-dropdown-trigger"
                                        src="img/reaction/happy.png" alt="reaction-happy">



                                    <div class="simple-dropdown padded reaction-item-dropdown">

                                        <p class="simple-dropdown-text"><img class="reaction"
                                                src="img/reaction/happy.png" alt="reaction-happy"> <span
                                                class="bold">Happy</span></p>



                                        <p class="simple-dropdown-text">Marcus Jhonson</p>

                                    </div>

                                </div>



                                <div class="reaction-item">

                                    <img class="reaction-image reaction-item-dropdown-trigger"
                                        src="img/reaction/like.png" alt="reaction-like">



                                    <div class="simple-dropdown padded reaction-item-dropdown">

                                        <p class="simple-dropdown-text"><img class="reaction"
                                                src="img/reaction/like.png" alt="reaction-like"> <span
                                                class="bold">Like</span></p>



                                        <p class="simple-dropdown-text">Kanika Bisht</p>



                                        <p class="simple-dropdown-text">Pankaj </p>



                                        <p class="simple-dropdown-text">Stuti Gupta</p>

                                    </div>

                                </div>

                            </div>



                            <p class="meta-line-text">4</p>

                        </div>



                        <div class="meta-line">

                            <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>



                            <div class="reaction-options small reaction-options-small-dropdown">

                                <div class="reaction-option text-tooltip-tft" data-title="Like">

                                    <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">

                                </div>



                                <div class="reaction-option text-tooltip-tft" data-title="Love">

                                    <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">

                                </div>



                                <div class="reaction-option text-tooltip-tft" data-title="Dislike">

                                    <img class="reaction-option-image" src="img/reaction/dislike.png"
                                        alt="reaction-dislike">

                                </div>



                                <div class="reaction-option text-tooltip-tft" data-title="Happy">

                                    <img class="reaction-option-image" src="img/reaction/happy.png"
                                        alt="reaction-happy">

                                </div>



                                <div class="reaction-option text-tooltip-tft" data-title="Funny">

                                    <img class="reaction-option-image" src="img/reaction/funny.png"
                                        alt="reaction-funny">

                                </div>



                                <div class="reaction-option text-tooltip-tft" data-title="Wow">

                                    <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">

                                </div>



                                <div class="reaction-option text-tooltip-tft" data-title="Angry">

                                    <img class="reaction-option-image" src="img/reaction/angry.png"
                                        alt="reaction-angry">

                                </div>



                                <div class="reaction-option text-tooltip-tft" data-title="Sad">

                                    <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">

                                </div>

                            </div>

                        </div>



                        <div class="meta-line">

                            <p class="meta-line-link light">Reply</p>

                        </div>



                        <div class="meta-line">

                            <p class="meta-line-timestamp">15 minutes ago</p>

                        </div>



                        <div class="meta-line settings">

                            <div class="post-settings-wrap">

                                <div class="post-settings post-settings-dropdown-trigger">

                                    <svg class="post-settings-icon icon-more-dots">
                                        <use xlink:href="#svg-more-dots"></use>
                                    </svg>

                                </div>



                                <div class="simple-dropdown post-settings-dropdown">

                                    <p class="simple-dropdown-link">Report Post</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <div class="post-comment-form">

                <div class="user-avatar small no-outline">

                    <div class="user-avatar-content">

                        <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg"></div>

                    </div>



                    <div class="user-avatar-progress">

                        <div class="hexagon-progress-40-44"></div>

                    </div>



                    <div class="user-avatar-progress-border">

                        <div class="hexagon-border-40-44"></div>

                    </div>



                    <div class="user-avatar-badge">

                        <div class="user-avatar-badge-border">

                            <div class="hexagon-22-24"></div>

                        </div>



                        <div class="user-avatar-badge-content">

                            <div class="hexagon-dark-16-18"></div>

                        </div>



                        <p class="user-avatar-badge-text">21</p>

                    </div>

                </div>



                <form class="form">

                    <div class="form-row">

                        <div class="form-item">

                            <div class="form-input small">
                                <label for="event-reply">Your Reply</label>
                                <input type="text" id="event-reply" name="event_reply">
                            </div>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>



    <script src="js/utils/app.js"></script>

    <script src="js/utils/page-loader.js"></script>

    <script src="js/vendor/simplebar.min.js"></script>

    <script src="js/utils/liquidify.js"></script>

    <script src="js/vendor/xm_plugins.min.js"></script>

    <script src="js/global/global.hexagons.js"></script>

    <script src="js/global/global.tooltips.js"></script>

    <script src="js/global/global.popups.js"></script>

    <script src="js/header/header.js"></script>

    <script src="js/sidebar/sidebar.js"></script>

    <script src="js/content/content.js"></script>

    <script src="js/form/form.utils.js"></script>

    <script src="js/utils/svg-loader.js"></script>

    <script src="js/global/global.maps.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
</body>

</html>