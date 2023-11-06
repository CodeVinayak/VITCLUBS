<?php
include("php/connection.php");
include("php/jsfun.php");
include("php/phpfun.php");
session_start();
if (!isset($_SESSION["name"])) {
    _redirect("../");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.min.css">
    <link rel="stylesheet" href="css/vendor/simplebar.css">
    <link rel="stylesheet" href="css/vendor/tiny-slider.css">
    <link rel="icon" href="img/favicon.ico">
    <title>VIT CLUBS | Info</title>
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
            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href="clubs.php" data-title="Clubs">
                    <svg class="menu-item-link-icon icon-group">
                        <use xlink:href="#svg-group"></use>
                    </svg>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-item-link text-tooltip-tfr" href="members.php" data-title="Members">
                    <svg class="menu-item-link-icon icon-members">
                        <use xlink:href="#svg-members"></use>
                    </svg>
                </a>
            </li>
            <li class="menu-item">
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
            <p class="user-short-description-title"><a href="#">Marina Valentine</a></p>
        </div>
        <ul class="menu">
            <li class="menu-item">
                <a class="menu-item-link" href="clubs.php">
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
            <li class="menu-item">
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
                <a class="menu-item-link" href="newsfeed.html">
                    <svg class="menu-item-link-icon icon-newsfeed">
                        <use xlink:href="#svg-newsfeed"></use>
                    </svg>
                    Newsfeed
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-item-link" href="overview.html">
                    <svg class="menu-item-link-icon icon-overview">
                        <use xlink:href="#svg-overview"></use>
                    </svg>
                    Overview
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-item-link" href="clubs.php">
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
            <li class="menu-item">
                <a class="menu-item-link" href="badges.html">
                    <svg class="menu-item-link-icon icon-badges">
                        <use xlink:href="#svg-badges"></use>
                    </svg>
                    Badges
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-item-link" href="quests.html">
                    <svg class="menu-item-link-icon icon-quests">
                        <use xlink:href="#svg-quests"></use>
                    </svg>
                    Quests
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-item-link" href="streams.html">
                    <svg class="menu-item-link-icon icon-streams">
                        <use xlink:href="#svg-streams"></use>
                    </svg>
                    Streams
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-item-link" href="events.php">
                    <svg class="menu-item-link-icon icon-events">
                        <use xlink:href="#svg-events"></use>
                    </svg>
                    Events
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-item-link" href="forums.html">
                    <svg class="menu-item-link-icon icon-forums">
                        <use xlink:href="#svg-forums"></use>
                    </svg>
                    Forums
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-item-link" href="marketplace.html">
                    <svg class="menu-item-link-icon icon-marketplace">
                        <use xlink:href="#svg-marketplace"></use>
                    </svg>
                    Marketplace
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
        <p class="navigation-widget-section-title">Clubss</p>
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
                </ul>
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
                <div class="dropdown-box-list small no-scroll">
                    <a class="dropdown-box-list-item" href="#">
                        <div class="user-status notification">
                            <div class="user-status-avatar">
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
                            </div>
                            <p class="user-status-title"><span class="bold">Kanika Bisht</span></p>
                            <p class="user-status-text">1 friends in common</p>
                            <div class="user-status-icon">
                                <svg class="icon-friend">
                                    <use xlink:href="#svg-friend"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-box-list-item" href="#">
                        <div class="user-status notification">
                            <div class="user-status-avatar">
                                <div class="user-avatar small no-outline">
                                    <div class="user-avatar-content">
                                        <div class="hexagon-image-30-32" data-src="img/avatar/15.jpg"></div>
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
                                        <p class="user-avatar-badge-text">7</p>
                                    </div>
                                </div>
                            </div>
                            <p class="user-status-title"><span class="bold">Tim Rogers</span></p>
                            <p class="user-status-text">4 friends in common</p>
                            <div class="user-status-icon">
                                <svg class="icon-friend">
                                    <use xlink:href="#svg-friend"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="dropdown-box-category">
                    <p class="dropdown-box-category-title">Clubs</p>
                </div>
                <div class="dropdown-box-list small no-scroll">
                    <a class="dropdown-box-list-item" href="club-timeline.php">
                        <div class="user-status notification">
                            <div class="user-status-avatar">
                                <div class="user-avatar small no-border">
                                    <div class="user-avatar-content">
                                        <div class="hexagon-image-40-44" data-src="img/avatar/24.jpg"></div>
                                    </div>
                                </div>
                            </div>
                            <p class="user-status-title"><span class="bold">Cosplayers of the World</span></p>
                            <p class="user-status-text">139 members</p>
                            <div class="user-status-icon">
                                <svg class="icon-group">
                                    <use xlink:href="#svg-group"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="dropdown-box-category">
                    <p class="dropdown-box-category-title">Marketplace</p>
                </div>
                <div class="dropdown-box-list small no-scroll">
                    <a class="dropdown-box-list-item" href="marketplace-product.html">
                        <div class="user-status no-padding-top">
                            <div class="user-status-avatar">
                                <figure class="picture small round liquid">
                                    <img src="img/marketplace/items/07.jpg" alt="item-07">
                                </figure>
                            </div>
                            <p class="user-status-title"><span class="bold">Mercenaries White Frame</span></p>
                            <p class="user-status-text">By Kanika Bisht</p>
                            <div class="user-status-icon">
                                <svg class="icon-marketplace">
                                    <use xlink:href="#svg-marketplace"></use>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
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
                                <a class="highlighted" href="#">post</a></p>
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
                                <a class="highlighted" href="#">post</a></p>
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
                                <a class="highlighted" href="#">post</a></p>
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
    <div class="container my-5" style="padding-top: 5%">
        <form action="" method="post" enctype="multipart/form-data">
            <label>Main Image : <input type="file" name="ma_img" required></label><br>
            <label>Background Image: <input type="file" name="bg_img" required></label><br>
            <label>Name : <input type="text" name="name" required></label><br>
            <label>Intro : <input type="text" name="intro" required></label><br>
            <label>Description:<textarea name="description" id="" cols="30" rows="10" required></textarea></label><br>
            <select class="form-select mb-3 pl-2" aria-label="Default select example" name="cat" required>
                <option selected>CATEGORY</option>
                <option value="t">Technical</option>
                <option value="n">Art</option>
            </select>
            <button class="btn btn-primary" type="submit" name="c_club">create club</button>
        </form>
        <?php
      if (isset($_POST["c_club"])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $cat = mysqli_real_escape_string($conn, $_POST['cat']);
        $intro = mysqli_real_escape_string($conn, $_POST['intro']);
        $desc = mysqli_real_escape_string($conn, $_POST['description']);
        $tmpimg1 = $_FILES['ma_img']['tmp_name'];
        $img_extension1 = "." . preg_replace('@.+\.@', '', $_FILES['ma_img']['name']);
        $tmpimg2 = $_FILES['bg_img']['tmp_name'];
        $img_extension2 = "." . preg_replace('@.+\.@', '', $_FILES['bg_img']['name']);
        $imgname1  = "cma".sql_srno().randStr(6).$img_extension1;
        $imgname2 = "cbg".sql_srno().randStr(6).$img_extension2;
        move_uploaded_file($tmpimg1, "images/clubs/main/". $imgname1);
        move_uploaded_file($tmpimg2, "images/clubs/background/". $imgname2);
        $sql="INSERT INTO `clubs`(`m_img`, `b_img`, `name`, `intro`, `description`,`typ`) VALUES ('$imgname1','$imgname2','$name','$intro','$desc','$cat');";
        $result=mysqli_query($conn, $sql);
        if(!$result){
          echo "Something Went Wrong Ask Admin";
        }
        else{
         _alert("Successfully Upload");
          _redirect("home.php");
        }
        unset($_SESSION["c_club"]);
      }   
      function sql_srno()
      {
        global $conn;
        $sql = "SELECT * From `clubs` ORDER BY SNo DESC limit 1";
        $result = mysqli_query($conn, $sql) or die("Something went wrong");
        if (!$result) {
          _alert("Failed to fetch image name");
        }
        $row = mysqli_fetch_assoc($result);
        if (!$row) {
          return "1";
        } else {
          $row = $row['SNo'] + 1;
          return "$row";
        }
      }
    ?>
    </div>


    <script src="js/utils/app.js"></script>
    <script src="js/utils/page-loader.js"></script>
    <script src="js/vendor/simplebar.min.js"></script>
    <script src="js/utils/liquidify.js"></script>
    <script src="js/vendor/xm_plugins.min.js"></script>
    <script src="js/global/global.hexagons.js"></script>
    <script src="js/global/global.tooltips.js"></script>
    <script src="js/header/header.js"></script>
    <script src="js/sidebar/sidebar.js"></script>
    <script src="js/content/content.js"></script>
    <script src="js/form/form.utils.js"></script>
    <script src="js/utils/svg-loader.js"></script>
</body>

</html>