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
  <title>VIT CLUBS | Home</title>
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
      <!-- <li class="menu-item active">
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
      <p class="user-short-description-title"><a href="#"><?php echo $uname; ?></a></p>
      <p class="user-short-description-title"><a href="#"><?php echo $m_id; ?></a></p>
    </div>
    <ul class="menu">
      <li class="menu-item active">
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
      <p class="navigation-widget-info-button button small secondary" style="color: white;">Logout</p>
    </div>
    <p class="navigation-widget-section-title">Sections</p>
    <ul class="menu">
      <li class="menu-item active">
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
      <li class="menu-item">
        <a class="menu-item-link" href="events.php">
          <svg class="menu-item-link-icon icon-events">
            <use xlink:href="#svg-events"></use>
          </svg>
          Events
        </a>
      </li>
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
    <a class="navigation-widget-section-link" href="aboutus.php">About Us</a>
    <a class="navigation-widget-section-link" href="#">Contact Us</a>
    <a class="navigation-widget-section-link" href="aboutus.php">About Us</a>
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
            <a class="menu-main-item-link" href="aboutus.php">About Us</a>
          </li>
          <li class="menu-main-item">
            <a class="menu-main-item-link" href="#">Contact us</a>
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
              <p class="user-status-title"><a class="bold" href="#">Pankaj </a>
                posted a comment on your <a class="highlighted" href="#">post</a>
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
              <p class="user-status-title"><a class="bold" href="#">Stuti Gupta</a> left
                a like <img class="reaction" src="img/reaction/like.png" alt="reaction-like"> reaction on your
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
              <p class="user-status-title"><a class="bold" href="#">Vinayak Singh</a> posted
                a comment on your <a class="highlighted" href="profile-photos.html">photo</a></p>
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
              <p class="user-status-title"><a class="bold" href="#">Shivani Jain</a> left
                a love <img class="reaction" src="img/reaction/love.png" alt="reaction-love"> reaction on your
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
              <p class="user-status-title"><a class="bold" href="#">Kanika Bisht</a> posted
                a comment on your <a class="highlighted" href="#">post</a></p>
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
    <div class="section-banner">
      <img class="section-banner-icon" src="img/banner/groups-icon.png" alt="groups-icon">
      <p class="section-banner-title">Clubs (7)</p>
      <p class="section-banner-text">Browse all the Clubs of the VIT Chennai</p>
    </div>
    <div class="section-filters-bar v1">
      <div class="section-filters-bar-actions">
        <div class="filter-tabs">
          <div class="filter-tab active">
            <p class="filter-tab-text">Newly Created</p>
          </div>
          <div class="filter-tab">
            <p class="filter-tab-text">Most Popular</p>
          </div>
          <div class="filter-tab">
            <p class="filter-tab-text">Alphabetical</p>
          </div>
        </div>
      </div>
      <form class="form">
          <div class="form-input small with-button">
            <label for="groups-search">Search Clubs</label>
            <input type="text" id="groups-search" name="groups_search">
            <button class="button primary">
              <svg class="icon-magnifying-glass">
                <use xlink:href="#svg-magnifying-glass"></use>
              </svg>
            </button>
          </div>
          <div class="form-select">
            <label for="groups-filter-category">Filter By</label>
            <select id="groups-filter-category" name="groups_filter_category">
              <option value="0">Newly Created</option>
              <option value="1">Most Popular</option>
              <option value="2">Alphabetical</option>
            </select>
            <svg class="form-select-icon icon-small-arrow">
              <use xlink:href="#svg-small-arrow"></use>
            </svg>
          </div>
        </form>
    </div>
    <div class="grid grid-4-4-4 centered">
      <div class="user-preview">
        <figure class="user-preview-cover liquid">
          <img src="img/cover/29.jpg" alt="cover-29">
        </figure>
        <div class="user-preview-info">
          <div class="tag-sticker">
            <div class="hexagon-image-30-32" data-src="img/avatar/t.png"></div>
          </div>
          <div class="user-short-description">
            <a class="user-short-description-avatar user-avatar medium no-stats" href="vr-club-timeline.php">
              <div class="user-avatar-border">
                <div class="hexagon-120-130"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-100-110" data-src="img/avatar/24.jpg"></div>
              </div>
            </a>
            <p class="user-short-description-title"><a href="vr-club-timeline.php">Virtual Reality Club</a></p>
            <p class="user-short-description-text">Vibrant Virtual Reality Experience</p>
          </div>
          <div class="user-stats">
            <div class="user-stat">
              <p class="user-stat-title">139</p>
              <p class="user-stat-text">members</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">105</p>
              <p class="user-stat-text">posts</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">7.3k</p>
              <p class="user-stat-text">visits</p>
            </div>
          </div>
          <div class="user-avatar-list medium reverse centered">
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
            <a class="user-avatar smaller no-stats" href="club-members.php">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/23.jpg"></div>
              </div>
              <div class="user-avatar-overlay">
                <div class="hexagon-overlay-30-32"></div>
              </div>
              <div class="user-avatar-overlay-content">
                <p class="user-avatar-overlay-content-text">+132</p>
              </div>
            </a>
          </div>
          <div class="user-preview-actions">
            <p class="button secondary full">
              <svg class="button-icon icon-join-group">
                <use xlink:href="#svg-join-group"></use>
              </svg>
              <a href="vr-club-timeline.php" style="color: white;">View Club</a>
            </p>
          </div>
        </div>
      </div>

      <?php
      $sql = "SELECT * FROM `clubs`";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($result)) {
      echo '
      <div class="user-preview">
        <figure class="user-preview-cover liquid">
          <img src="images/clubs/background/'.$row["b_img"].'" alt="cover-29">
        </figure>
        <div class="user-preview-info">
          <div class="tag-sticker">
            <div class="hexagon-image-30-32" data-src="img/avatar/'.$row["typ"].'.png"></div>
          </div>
          <div class="user-short-description">
            <a class="user-short-description-avatar user-avatar medium no-stats" href="vr-club-timeline.php">
              <div class="user-avatar-border">
                <div class="hexagon-120-130"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-100-110" data-src="images/clubs/main/'.$row["m_img"].'"></div>
              </div>
            </a>
            <p class="user-short-description-title"><a href="vr-club-timeline.php">'.$row["name"].'</a></p>
            <p class="user-short-description-text">'.$row["intro"].'</p>
          </div>
          <div class="user-stats">
            <div class="user-stat">
              <p class="user-stat-title">139</p>
              <p class="user-stat-text">members</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">105</p>
              <p class="user-stat-text">posts</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">7.3k</p>
              <p class="user-stat-text">visits</p>
            </div>
          </div>
          <div class="user-avatar-list medium reverse centered">
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
            <a class="user-avatar smaller no-stats" href="club-members.php">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/23.jpg"></div>
              </div>
              <div class="user-avatar-overlay">
                <div class="hexagon-overlay-30-32"></div>
              </div>
              <div class="user-avatar-overlay-content">
                <p class="user-avatar-overlay-content-text">+132</p>
              </div>
            </a>
          </div>
          <div class="user-preview-actions">
            <p class="button secondary full">
              <svg class="button-icon icon-join-group">
                <use xlink:href="#svg-join-group"></use>
              </svg>
              <a href="vr-club-timeline.php" style="color: white;">View Club</a>
            </p>
          </div>
        </div>
      </div>';
      }
      ?>  
      <div class="user-preview">
        <figure class="user-preview-cover liquid">
          <img src="img/cover/08.jpg" alt="cover-08">
        </figure>
        <div class="user-preview-info">
          <div class="tag-sticker">
            <svg class="tag-sticker-icon icon-private">
              <use xlink:href="#svg-private"></use>
            </svg>
          </div>
          <div class="user-short-description">
            <a class="user-short-description-avatar user-avatar medium no-stats" href="club-timeline.php">
              <div class="user-avatar-border">
                <div class="hexagon-120-130"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-100-110" data-src="img/avatar/29.jpg"></div>
              </div>
            </a>
            <p class="user-short-description-title"><a href="club-timeline.php">Music Club</a></p>
            <p class="user-short-description-text">Melodies Unite at VIT Chennai</p>
          </div>
          <div class="user-stats">
            <div class="user-stat">
              <p class="user-stat-title">265</p>
              <p class="user-stat-text">members</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">168</p>
              <p class="user-stat-text">posts</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">11.2k</p>
              <p class="user-stat-text">visits</p>
            </div>
          </div>
          <div class="user-avatar-list medium reverse centered">
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/13.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/08.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/16.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/23.jpg"></div>
              </div>
            </div>
            <a class="user-avatar smaller no-stats" href="club-members.php">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/11.jpg"></div>
              </div>
              <div class="user-avatar-overlay">
                <div class="hexagon-overlay-30-32"></div>
              </div>
              <div class="user-avatar-overlay-content">
                <p class="user-avatar-overlay-content-text">+260</p>
              </div>
            </a>
          </div>
          <div class="user-preview-actions">
            <p class="button secondary full">
              <svg class="button-icon icon-join-group">
                <use xlink:href="#svg-join-group"></use>
              </svg>
             View Club
            </p>
          </div>
        </div>
      </div>
      <div class="user-preview">
        <figure class="user-preview-cover liquid">
          <img src="img/cover/27.jpg" alt="cover-27">
        </figure>
        <div class="user-preview-info">
          <div class="tag-sticker">
            <svg class="tag-sticker-icon icon-public">
              <use xlink:href="#svg-public"></use>
            </svg>
          </div>
          <div class="user-short-description">
            <a class="user-short-description-avatar user-avatar medium no-stats" href="club-timeline.php">
              <div class="user-avatar-border">
                <div class="hexagon-120-130"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-100-110" data-src="img/avatar/25.jpg"></div>
              </div>
            </a>
            <p class="user-short-description-title"><a href="club-timeline.php">Stream Designers</a></p>
            <p class="user-short-description-text">Designers Assemble!</p>
          </div>
          <div class="user-stats">
            <div class="user-stat">
              <p class="user-stat-title">466</p>
              <p class="user-stat-text">members</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">205</p>
              <p class="user-stat-text">posts</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">7.9k</p>
              <p class="user-stat-text">visits</p>
            </div>
          </div>
          <div class="user-avatar-list medium reverse centered">
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/12.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/15.jpg"></div>
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
                <div class="hexagon-image-30-32" data-src="img/avatar/09.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
              </div>
            </div>
            <a class="user-avatar smaller no-stats" href="club-members.php">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/13.jpg"></div>
              </div>
              <div class="user-avatar-overlay">
                <div class="hexagon-overlay-30-32"></div>
              </div>
              <div class="user-avatar-overlay-content">
                <p class="user-avatar-overlay-content-text">+461</p>
              </div>
            </a>
          </div>
          <div class="user-preview-actions">
            <p class="button secondary full">
              <svg class="button-icon icon-join-group">
                <use xlink:href="#svg-join-group"></use>
              </svg>
             View Club
            </p>
          </div>
        </div>
      </div>
      <div class="user-preview">
        <figure class="user-preview-cover liquid">
          <img src="img/cover/48.jpg" alt="cover-48">
        </figure>
        <div class="user-preview-info">
          <div class="tag-sticker">
            <svg class="tag-sticker-icon icon-public">
              <use xlink:href="#svg-public"></use>
            </svg>
          </div>
          <div class="user-short-description">
            <a class="user-short-description-avatar user-avatar medium no-stats" href="club-timeline.php">
              <div class="user-avatar-border">
                <div class="hexagon-120-130"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-100-110" data-src="img/avatar/28.jpg"></div>
              </div>
            </a>
            <p class="user-short-description-title"><a href="club-timeline.php">Street Artists</a></p>
            <p class="user-short-description-text">Sharing the art!</p>
          </div>
          <div class="user-stats">
            <div class="user-stat">
              <p class="user-stat-title">951</p>
              <p class="user-stat-text">members</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">408</p>
              <p class="user-stat-text">posts</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">9.2k</p>
              <p class="user-stat-text">visits</p>
            </div>
          </div>
          <div class="user-avatar-list medium reverse centered">
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/09.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/12.jpg"></div>
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
                <div class="hexagon-image-30-32" data-src="img/avatar/15.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/08.jpg"></div>
              </div>
            </div>
            <a class="user-avatar smaller no-stats" href="club-members.php">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/23.jpg"></div>
              </div>
              <div class="user-avatar-overlay">
                <div class="hexagon-overlay-30-32"></div>
              </div>
              <div class="user-avatar-overlay-content">
                <p class="user-avatar-overlay-content-text">+946</p>
              </div>
            </a>
          </div>
          <div class="user-preview-actions">
            <p class="button secondary full">
              <svg class="button-icon icon-join-group">
                <use xlink:href="#svg-join-group"></use>
              </svg>
             View Club
            </p>
          </div>
        </div>
      </div>
      <div class="user-preview">
        <figure class="user-preview-cover liquid">
          <img src="img/cover/05.jpg" alt="cover-05">
        </figure>
        <div class="user-preview-info">
          <div class="tag-sticker">
            <svg class="tag-sticker-icon icon-public">
              <use xlink:href="#svg-public"></use>
            </svg>
          </div>
          <div class="user-short-description">
            <a class="user-short-description-avatar user-avatar medium no-stats" href="club-timeline.php">
              <div class="user-avatar-border">
                <div class="hexagon-120-130"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-100-110" data-src="img/avatar/27.jpg"></div>
              </div>
            </a>
            <p class="user-short-description-title"><a href="club-timeline.php">Gaming Watchtower</a></p>
            <p class="user-short-description-text">News, releases and more!</p>
          </div>
          <div class="user-stats">
            <div class="user-stat">
              <p class="user-stat-title">2.365</p>
              <p class="user-stat-text">members</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">618</p>
              <p class="user-stat-text">posts</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">14.2k</p>
              <p class="user-stat-text">visits</p>
            </div>
          </div>
          <div class="user-avatar-list medium reverse centered">
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
                <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
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
                <div class="hexagon-image-30-32" data-src="img/avatar/11.jpg"></div>
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
            <a class="user-avatar smaller no-stats" href="club-members.php">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/16.jpg"></div>
              </div>
              <div class="user-avatar-overlay">
                <div class="hexagon-overlay-30-32"></div>
              </div>
              <div class="user-avatar-overlay-content">
                <p class="user-avatar-overlay-content-text">+2.3k</p>
              </div>
            </a>
          </div>
          <div class="user-preview-actions">
            <p class="button secondary full">
              <svg class="button-icon icon-join-group">
                <use xlink:href="#svg-join-group"></use>
              </svg>
             View Club
            </p>
          </div>
        </div>
      </div>
      <div class="user-preview">
        <figure class="user-preview-cover liquid">
          <img src="img/cover/41.jpg" alt="cover-41">
        </figure>
        <div class="user-preview-info">
          <div class="tag-sticker">
            <svg class="tag-sticker-icon icon-public">
              <use xlink:href="#svg-public"></use>
            </svg>
          </div>
          <div class="user-short-description">
            <a class="user-short-description-avatar user-avatar medium no-stats" href="club-timeline.php">
              <div class="user-avatar-border">
                <div class="hexagon-120-130"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-100-110" data-src="img/avatar/26.jpg"></div>
              </div>
            </a>
            <p class="user-short-description-title"><a href="club-timeline.php">Retro Arcade</a></p>
            <p class="user-short-description-text">All related to old games</p>
          </div>
          <div class="user-stats">
            <div class="user-stat">
              <p class="user-stat-title">307</p>
              <p class="user-stat-text">members</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">558</p>
              <p class="user-stat-text">posts</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">7.3k</p>
              <p class="user-stat-text">visits</p>
            </div>
          </div>
          <div class="user-avatar-list medium reverse centered">
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/23.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/16.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/09.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/12.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/08.jpg"></div>
              </div>
            </div>
            <a class="user-avatar smaller no-stats" href="club-members.php">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/15.jpg"></div>
              </div>
              <div class="user-avatar-overlay">
                <div class="hexagon-overlay-30-32"></div>
              </div>
              <div class="user-avatar-overlay-content">
                <p class="user-avatar-overlay-content-text">+302</p>
              </div>
            </a>
          </div>
          <div class="user-preview-actions">
            <p class="button secondary full">
              <svg class="button-icon icon-join-group">
                <use xlink:href="#svg-join-group"></use>
              </svg>
             View Club
            </p>
          </div>
        </div>
      </div>
      <div class="user-preview">
        <figure class="user-preview-cover liquid">
          <img src="img/cover/46.jpg" alt="cover-46">
        </figure>
        <div class="user-preview-info">
          <div class="tag-sticker">
            <svg class="tag-sticker-icon icon-public">
              <use xlink:href="#svg-public"></use>
            </svg>
          </div>
          <div class="user-short-description">
            <a class="user-short-description-avatar user-avatar medium no-stats" href="club-timeline.php">
              <div class="user-avatar-border">
                <div class="hexagon-120-130"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-100-110" data-src="img/avatar/30.jpg"></div>
              </div>
            </a>
            <p class="user-short-description-title"><a href="club-timeline.php">Living in Japan</a></p>
            <p class="user-short-description-text">Share your experiences abroad!</p>
          </div>
          <div class="user-stats">
            <div class="user-stat">
              <p class="user-stat-title">66</p>
              <p class="user-stat-text">members</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">101</p>
              <p class="user-stat-text">posts</p>
            </div>
            <div class="user-stat">
              <p class="user-stat-title">2.4k</p>
              <p class="user-stat-text">visits</p>
            </div>
          </div>
          <div class="user-avatar-list medium reverse centered">
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/13.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/15.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/16.jpg"></div>
              </div>
            </div>
            <div class="user-avatar smaller no-stats">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/11.jpg"></div>
              </div>
            </div>
            <a class="user-avatar smaller no-stats" href="club-members.php">
              <div class="user-avatar-border">
                <div class="hexagon-34-36"></div>
              </div>
              <div class="user-avatar-content">
                <div class="hexagon-image-30-32" data-src="img/avatar/23.jpg"></div>
              </div>
              <div class="user-avatar-overlay">
                <div class="hexagon-overlay-30-32"></div>
              </div>
              <div class="user-avatar-overlay-content">
                <p class="user-avatar-overlay-content-text">+61</p>
              </div>
            </a>
          </div>
          <div class="user-preview-actions">
            <p class="button secondary full">
              <svg class="button-icon icon-join-group">
                <use xlink:href="#svg-join-group"></use>
              </svg>
             View Club
            </p>
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
  <script src="js/global/global.hexagons.js"></script>
  <script src="js/global/global.tooltips.js"></script>
  <script src="js/header/header.js"></script>
  <script src="js/sidebar/sidebar.js"></script>
  <script src="js/content/content.js"></script>
  <script src="js/form/form.utils.js"></script>
  <script src="js/utils/svg-loader.js"></script>
</body>
</html>