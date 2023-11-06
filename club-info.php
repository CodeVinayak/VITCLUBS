<?php
include("php/jsfun.php");
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
        <path d="M27.18,24.038c-0.141-0.095-0.244-0.146-0.244-0.146l-0.005-0.049C25.489,22.783,23.103,22,23.103,22c1.542,0,2.582-0.563,3.501-1.334c-0.049-0.055,0.7-0.666,0.7-0.666c0.146-8.251-4.477-12.745-7.001-14.667C18.15,9.564,16.802,14,16.802,14c-0.219-4.426,0.243-8.072,0.7-10.667c-0.85-0.452-1.956-0.698-2.296-1.537C14.865,0.957,14.015,0,14.015,0L14,0.014L13.985,0c0,0-0.85,0.957-1.19,1.796c-0.34,0.839-1.445,1.085-2.295,1.537C10.957,5.928,11.418,9.574,11.2,14c0,0-1.349-4.436-3.501-8.667C5.174,7.255,0.551,11.749,0.697,20c0,0,0.75,0.611,0.701,0.666C2.316,21.437,3.357,22,4.898,22c0,0-2.387,0.783-3.829,1.844l-0.005,0.049c0,0-0.104,0.051-0.244,0.146c-0.48,0.397-0.806,0.828-0.819,1.269c-0.023,0.521,0.263,1.181,1.233,1.973c0,0,0.136,9.259,9.69,11.29c0,0,0.212,0.815,0.975,1.431L14,38l2.102,2c0.763-0.615,0.975-1.431,0.975-1.431c9.555-2.031,9.689-11.29,9.689-11.29c0.971-0.792,1.256-1.451,1.233-1.973C27.986,24.866,27.659,24.436,27.18,24.038z M4.198,26c2.362,0.121,3.517,1.473,5.602,4c0.799,0.969,2.059,0.83,2.059,0.83L11.899,34C5.249,34,4.198,26,4.198,26z M14,28.162l-2.97-2.828l2.101-2.001l-2.101-2l2.101-2l-2.101-2L14,14.505l2.972,2.828l-2.102,2l2.102,2l-2.102,2l2.102,2.001L14,28.162z M16.102,34l0.041-3.17c0,0,1.26,0.139,2.059-0.83c2.085-2.527,3.239-3.879,5.602-4C23.803,26,22.752,34,16.102,34z M13.3,26h1.4v-1.333h-1.4V26z M13.3,22h1.4v-1.334h-1.4V22z M13.3,18h1.4v-1.333h-1.4V18z"/>
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
  <nav id="navigation-widget-mobile" class="navigation-widget navigation-widget-mobile sidebar left hidden" data-simplebar>
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
    <a class="navigation-widget-section-link" href="hub-store-account.html">My Account <span class="highlighted">$250,32</span></a>
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
              <p class="user-status-title"><span class="bold">Virtual Reality Club</span></p>
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
                  <p class="user-status-title"><a class="bold" href="#">Pankaj </a> posted a comment on your <a class="highlighted" href="#">post</a></p>
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
                  <p class="user-status-title"><a class="bold" href="#">Stuti Gupta</a> left a like <img class="reaction" src="img/reaction/like.png" alt="reaction-like"> reaction on your <a class="highlighted" href="#">post</a></p>
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
                  <p class="user-status-title"><a class="bold" href="#">Vinayak Singh</a> posted a comment on your <a class="highlighted" href="profile-photos.html">post</a></p>
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
                  <p class="user-status-title"><a class="bold" href="#">Shivani Jain</a> left a love <img class="reaction" src="img/reaction/love.png" alt="reaction-love"> reaction on your <a class="highlighted" href="#">post</a></p>
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
                  <p class="user-status-title"><a class="bold" href="#">Kanika Bisht</a> posted a comment on your <a class="highlighted" href="#">post</a></p>
                  <p class="user-status-timestamp">3 hours ago</p>
                  <div class="user-status-icon">
                    <svg class="icon-comment">
                      <use xlink:href="#svg-comment"></use>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <a class="dropdown-box-button secondary" href="hub-profile-notifications.html">View all Notifications</a>
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
      <a class="action-item-wrap" href="hub-profile-info.html">
        <div class="action-item dark">
          <svg class="action-item-icon icon-settings">
            <use xlink:href="#svg-settings"></use>
          </svg>
        </div>
      </a>
    </div>
  </aside>
  <div class="content-grid">
    <div class="profile-header v2">
      <figure class="profile-header-cover liquid">
        <img src="img/cover/29.jpg" alt="cover-29">
      </figure>
      <div class="profile-header-info">
        <div class="user-short-description big">
          <a class="user-short-description-avatar user-avatar big no-stats" href="club-timeline.php">
            <div class="user-avatar-border">
              <div class="hexagon-148-164"></div>
            </div>
            <div class="user-avatar-content">
              <div class="hexagon-image-124-136" data-src="img/avatar/24.jpg"></div>
            </div>
          </a>
          <a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium no-stats" href="club-timeline.php">
            <div class="user-avatar-border">
              <div class="hexagon-120-130"></div>
            </div>
            <div class="user-avatar-content">
              <div class="hexagon-image-100-110" data-src="img/avatar/24.jpg"></div>
            </div>
          </a>
          <p class="user-short-description-title"><a href="club-timeline.php">Virtual Reality Club</a></p>
          <p class="user-short-description-text">VIBRANT VIRTUAL REALITY EXPERIENCE</p>
        </div>
        <div class="user-stats">
          <div class="user-stat big">
            <div class="user-stat-icon">
              <svg class="icon-public">
                <use xlink:href="#svg-public"></use>
              </svg>
            </div>
            <p class="user-stat-text">public</p>
          </div>
          <div class="user-stat big">
            <p class="user-stat-title">139</p>
            <p class="user-stat-text">members</p>
          </div>
          <div class="user-stat big">
            <p class="user-stat-title">105</p>
            <p class="user-stat-text">posts</p>
          </div>
          <div class="user-stat big">
            <p class="user-stat-title">7.3k</p>
            <p class="user-stat-text">visits</p>
          </div>
        </div>
        <div class="tag-sticker">
          <svg class="tag-sticker-icon icon-public">
            <use xlink:href="#svg-public"></use>
          </svg>
        </div>
        <div class="profile-header-info-actions">
          <p class="profile-header-info-action button secondary">
            <svg class="icon-join-group">
              <use xlink:href="#svg-join-group"></use>
            </svg>
          </p>
          <a class="profile-header-info-action button" href="hub-group-management.html">
            <svg class="icon-more-dots">
              <use xlink:href="#svg-more-dots"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <nav class="section-navigation">
      <div id="section-navigation-medium-slider" class="section-menu secondary">
        <a class="section-menu-item" href="club-timeline.php">
          <svg class="section-menu-item-icon icon-timeline">
            <use xlink:href="#svg-timeline"></use>
          </svg>
          <p class="section-menu-item-text">Timeline</p>
        </a>
        <a class="section-menu-item active" href="club-events.php">
          <svg class="section-menu-item-icon icon-info">
            <use xlink:href="#svg-info"></use>
          </svg>
          <p class="section-menu-item-text">Info</p>
        </a>
        <a class="section-menu-item" href="club-members.php">
          <svg class="section-menu-item-icon icon-members">
            <use xlink:href="#svg-members"></use>
          </svg>
          <p class="section-menu-item-text">Members</p>
        </a>
        <a class="section-menu-item" href="club-events.php">
          <svg class="section-menu-item-icon icon-events">
            <use xlink:href="#svg-events"></use>
          </svg>
          <p class="section-menu-item-text">Events</p>
        </a>
        <a class="section-menu-item" href="#">
          <svg class="section-menu-item-icon icon-forum">
            <use xlink:href="#svg-forum"></use>
          </svg>
          <p class="section-menu-item-text">Forum</p>
        </a>
        <a class="section-menu-item" href="#">
          <svg class="section-menu-item-icon icon-photos">
            <use xlink:href="#svg-photos"></use>
          </svg>
          <p class="section-menu-item-text">Photos</p>
        </a>
        <a class="section-menu-item" href="#">
          <svg class="section-menu-item-icon icon-videos">
            <use xlink:href="#svg-videos"></use>
          </svg>
          <p class="section-menu-item-text">Videos</p>
        </a>
      </div>
      <div id="section-navigation-medium-slider-controls" class="slider-controls">
        <div class="slider-control left">
          <svg class="slider-control-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
        </div>
        <div class="slider-control right">
          <svg class="slider-control-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
        </div>
      </div>
    </nav>
    <div class="grid grid-3-6-3">
      <div class="grid-column">
        <div class="widget-box">
          <div class="widget-box-settings">
            <div class="post-settings-wrap">
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
              </div>
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Widget Settings</p>
              </div>
            </div>
          </div>
          <p class="widget-box-title">Social Networks</p>
          <div class="widget-box-content">
            <div class="social-links multiline align-left">
              <a class="social-link small facebook" href="#">
                <svg class="social-link-icon icon-facebook">
                  <use xlink:href="#svg-facebook"></use>
                </svg>
              </a>
              <a class="social-link small twitter" href="#">
                <svg class="social-link-icon icon-twitter">
                  <use xlink:href="#svg-twitter"></use>
                </svg>
              </a>
              <a class="social-link small instagram" href="#">
                <svg class="social-link-icon icon-instagram">
                  <use xlink:href="#svg-instagram"></use>
                </svg>
              </a>
              <a class="social-link small twitch" href="#">
                <svg class="social-link-icon icon-twitch">
                  <use xlink:href="#svg-twitch"></use>
                </svg>
              </a>
              <a class="social-link small artstation" href="#">
                <svg class="social-link-icon icon-artstation">
                  <use xlink:href="#svg-artstation"></use>
                </svg>
              </a>
              <a class="social-link small youtube" href="#">
                <svg class="social-link-icon icon-youtube">
                  <use xlink:href="#svg-youtube"></use>
                </svg>
              </a>
              <a class="social-link small discord" href="#">
                <svg class="social-link-icon icon-discord">
                  <use xlink:href="#svg-discord"></use>
                </svg>
              </a>
              <a class="social-link small patreon" href="#">
                <svg class="social-link-icon icon-patreon">
                  <use xlink:href="#svg-patreon"></use>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-box-settings">
            <div class="post-settings-wrap">
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
              </div>
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Widget Settings</p>
              </div>
            </div>
          </div>
          <p class="widget-box-title">Group Info</p>
          <div class="widget-box-content">
            <p class="paragraph">Dive into the immersive world of virtual reality with us! Join a vibrant community of VR enthusiasts and explore limitless possibilities. Get ready to redefine reality. 🚀</p>
            <div class="information-line-list">
              <div class="information-line">
                <p class="information-line-title">Created</p>
                <p class="information-line-text">April 9th, 2018</p>
              </div>
              <div class="information-line">
                <p class="information-line-title">Type</p>
                <p class="information-line-text">Public</p>
              </div>
              <div class="information-line">
                <p class="information-line-title">Email</p>
                <p class="information-line-text"><a href="#">info@vit.ac.in</a></p>
              </div>
              <div class="information-line">
                <p class="information-line-title">Web</p>
                <p class="information-line-text"><a href="#">https://vr-club-vitc.netlify.app/</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-column">
        <div class="grid grid-half">
          <div class="stats-decoration v2 secondary">
            <p class="stats-decoration-title">659</p>
            <p class="stats-decoration-subtitle">Group Views</p>
            <p class="stats-decoration-text">Last Month</p>
            <div class="percentage-diff">
              <div class="percentage-diff-icon-wrap positive">
                <svg class="percentage-diff-icon icon-plus-small">
                  <use xlink:href="#svg-plus-small"></use>
                </svg>
              </div>
              <p class="percentage-diff-text">8.1%</p>
            </div>
          </div>
          <div class="stats-decoration v2 primary">
            <p class="stats-decoration-title">14</p>
            <p class="stats-decoration-subtitle">New Discussions</p>
            <p class="stats-decoration-text">Last Month</p>
            <div class="percentage-diff">
              <div class="percentage-diff-icon-wrap negative">
                <svg class="percentage-diff-icon icon-minus-small">
                  <use xlink:href="#svg-minus-small"></use>
                </svg>
              </div>
              <p class="percentage-diff-text">0.2%</p>
            </div>
          </div>
        </div>
        <div class="widget-box">
          <div class="widget-box-actions">
            <div class="widget-box-action">
              <p class="widget-box-title">New Members</p>
            </div>
            <div class="widget-box-action">
              <div class="form-select v2">
                <select id="members-report-date" name="members_report_date">
                  <option value="0">Jan - Dec 2018</option>
                  <option value="1">Jan - Dec 2019</option>
                </select>
                <svg class="form-select-icon icon-small-arrow">
                  <use xlink:href="#svg-small-arrow"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="widget-box-content">
            <div class="chart-wrap">
              <div class="chart">
                <canvas id="members-report-chart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-column">
        <div class="widget-box">
          <div class="widget-box-settings">
            <div class="post-settings-wrap">
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
              </div>
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <p class="simple-dropdown-link">Widget Settings</p>
              </div>
            </div>
          </div>
          <p class="widget-box-title">Group Rules</p>
          <div class="widget-box-content">
            <p class="paragraph">Hi! To ensure that this is a great place for everyone to have a wondefull time, we have some rules. Breaking them will result in a ban from the group.</p>
            <ol class="ordered-item-list">
              <li class="ordered-item">
                <p class="ordered-item-bullet">01-</p>
                <p class="ordered-item-text">Be positive! Respect and help other viewers</p>
              </li>
              <li class="ordered-item">
                <p class="ordered-item-bullet">02-</p>
                <p class="ordered-item-text">No insults, aggravations or any other bad language</p>
              </li>
              <li class="ordered-item">
                <p class="ordered-item-bullet">03-</p>
                <p class="ordered-item-text">No self promotions</p>
              </li>
              <li class="ordered-item">
                <p class="ordered-item-bullet">04-</p>
                <p class="ordered-item-text">Avoid political or religious discussions</p>
              </li>
              <li class="ordered-item">
                <p class="ordered-item-bullet">05-</p>
                <p class="ordered-item-text">No comment spamming</p>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="js/utils/app.js"></script>
<script src="js/utils/page-loader.js"></script>
<script src="js/vendor/simplebar.min.js"></script>
<script src="js/utils/liquidify.js"></script>
<script src="js/vendor/xm_plugins.min.js"></script>
<script src="js/vendor/tiny-slider.min.js"></script>
<script src="js/vendor/Chart.bundle.min.js"></script>
<script src="js/global/global.hexagons.js"></script>
<script src="js/global/global.tooltips.js"></script>
<script src="js/global/global.charts.js"></script>
<script src="js/header/header.js"></script>
<script src="js/sidebar/sidebar.js"></script>
<script src="js/content/content.js"></script>
<script src="js/form/form.utils.js"></script>
<script src="js/utils/svg-loader.js"></script>
</body>
</html>