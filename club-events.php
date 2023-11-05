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
  <title>VIT CLUBS |Group Events </title>
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
  <aside id="chat-widget-message" class="chat-widget chat-widget-overlay hidden sidebar right">
    <div class="chat-widget-header">
      <div class="chat-widget-close-button">
        <svg class="chat-widget-close-button-icon icon-back-arrow">
          <use xlink:href="#svg-back-arrow"></use>
        </svg>
      </div>
      <div class="user-status">
        <div class="user-status-avatar">
          <div class="user-avatar small no-outline online">
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
        </div>
        <p class="user-status-title"><span class="bold">Pankaj </span></p>
        <p class="user-status-tag online">Online</p>
      </div>
    </div>
    <div class="chat-widget-conversation" data-simplebar>
      <div class="chat-widget-speaker left">
        <div class="chat-widget-speaker-avatar">
          <div class="user-avatar tiny no-border">
            <div class="user-avatar-content">
              <div class="hexagon-image-24-26" data-src="img/avatar/03.jpg"></div>
            </div>
          </div>
        </div>
        <p class="chat-widget-speaker-message">Hi Marina! It's been a long time!</p>
        <p class="chat-widget-speaker-timestamp">Yesterday at 8:36PM</p>
      </div>
      <div class="chat-widget-speaker right">
        <p class="chat-widget-speaker-message">Hey Nick!</p>
        <p class="chat-widget-speaker-message">You're right, it's been a really long time! I think the last time
          we saw was at Neko's party</p>
        <p class="chat-widget-speaker-timestamp">10:05AM</p>
      </div>
      <div class="chat-widget-speaker left">
        <div class="chat-widget-speaker-avatar">
          <div class="user-avatar tiny no-border">
            <div class="user-avatar-content">
              <div class="hexagon-image-24-26" data-src="img/avatar/03.jpg"></div>
            </div>
          </div>
        </div>
        <p class="chat-widget-speaker-message">Yeah! I remember now! The stream launch party</p>
        <p class="chat-widget-speaker-message">That reminds me that I wanted to ask you something</p>
        <p class="chat-widget-speaker-message">Can you stream the new game?</p>
      </div>
    </div>
    <form class="chat-widget-form">
      <div class="interactive-input small">
        <input type="text" id="chat-widget-message-text" name="chat_widget_message_text"
          placeholder="Write a message...">
        <div class="interactive-input-icon-wrap">
          <svg class="interactive-input-icon icon-send-message">
            <use xlink:href="#svg-send-message"></use>
          </svg>
        </div>
        <div class="interactive-input-action">
          <svg class="interactive-input-action-icon icon-cross-thin">
            <use xlink:href="#svg-cross-thin"></use>
          </svg>
        </div>
      </div>
    </form>
  </aside>
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
          <a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium no-stats"
            href="club-timeline.php">
            <div class="user-avatar-border">
              <div class="hexagon-120-130"></div>
            </div>
            <div class="user-avatar-content">
              <div class="hexagon-image-100-110" data-src="img/avatar/24.jpg"></div>
            </div>
          </a>
          <p class="user-short-description-title"><a href="club-timeline.php">Cosplayers of the World</a></p>
          <p class="user-short-description-text">All cosplayers welcome!</p>
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
        <a class="section-menu-item" href="club-info.php">
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
        <a class="section-menu-item active" href="club-events.php">
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
    <div class="section-header">
      <div class="section-header-info">
        <p class="section-pretitle">Browse the Clubs</p>
        <h2 class="section-title">Upcoming Events <span class="highlighted">2</span></h2>
      </div>
    </div>
    <div class="grid grid-3-3-3-3 centered-on-mobile">
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
            <p class="event-preview-title popup-event-information-trigger">CosWorld 2019 After Party</p>
            <p class="event-preview-timestamp"><span class="bold">11:00</span> PM</p>
            <p class="event-preview-text">Join us at the CosWorld after party! We'll be eating, drinking and
              having a great time exchanging experiences...</p>
          </div>
          <div class="event-preview-info-bottom">
            <div class="decorated-text">
              <svg class="decorated-text-icon icon-pin">
                <use xlink:href="#svg-pin"></use>
              </svg>
              <p class="decorated-text-content">CosWorld Arena</p>
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
          <img src="img/cover/43.jpg" alt="cover-43">
        </figure>
        <div class="event-preview-info">
          <div class="event-preview-info-top">
            <div class="date-sticker">
              <p class="date-sticker-day">31</p>
              <p class="date-sticker-month">Oct</p>
            </div>
            <p class="event-preview-title popup-event-information-trigger">USA Halloween Meetup 2019</p>
            <p class="event-preview-timestamp"><span class="bold">12:30</span> PM</p>
            <p class="event-preview-text">Let's celebrate Halloween together with our best cosplays! Come and
              bring your friends!</p>
          </div>
          <div class="event-preview-info-bottom">
            <div class="decorated-text">
              <svg class="decorated-text-icon icon-pin">
                <use xlink:href="#svg-pin"></use>
              </svg>
              <p class="decorated-text-content">Elm Street Park</p>
            </div>
            <div class="meta-line">
              <div class="meta-line-list user-avatar-list">
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
                    <div class="hexagon-image-18-20" data-src="img/avatar/07.jpg"></div>
                  </div>
                </div>
                <div class="user-avatar micro no-stats">
                  <div class="user-avatar-border">
                    <div class="hexagon-22-24"></div>
                  </div>
                  <div class="user-avatar-content">
                    <div class="hexagon-image-18-20" data-src="img/avatar/13.jpg"></div>
                  </div>
                </div>
              </div>
              <p class="meta-line-text">+27 will assist</p>
            </div>
            <p class="button secondary">Add to Calendar</p>
          </div>
        </div>
      </div>
    </div>
  </div>
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
      <p class="popup-event-title">CosWorld 2019 After Party</p>
      <div class="decorated-feature-list">
        <div class="decorated-feature">
          <svg class="decorated-feature-icon icon-events">
            <use xlink:href="#svg-events"></use>
          </svg>
          <div class="decorated-feature-info">
            <p class="decorated-feature-title">Sunday, August 26th - 2019</p>
            <p class="decorated-feature-text">8:30 AM</p>
          </div>
        </div>
        <div class="decorated-feature">
          <svg class="decorated-feature-icon icon-pin">
            <use xlink:href="#svg-pin"></use>
          </svg>
          <div class="decorated-feature-info">
            <p class="decorated-feature-title">CosWorld Arena</p>
            <p class="decorated-feature-text">Alchemists Avenue 310 - NY 10001 New York - USA</p>
          </div>
        </div>
        <div class="decorated-feature">
          <svg class="decorated-feature-icon icon-ticket">
            <use xlink:href="#svg-ticket"></use>
          </svg>
          <div class="decorated-feature-info">
            <p class="decorated-feature-title">$12 U$D</p>
            <p class="decorated-feature-text">Entry Price</p>
          </div>
        </div>
      </div>
      <p class="popup-event-subtitle">Description</p>
      <p class="popup-event-text">Join us at the CosWorld after party! We'll be eating, drinking and having a
        great time exchanging experiences from the convention</p>
      <p class="popup-event-subtitle">Will Assist</p>
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
            <p class="user-avatar-overlay-content-text">+31</p>
          </div>
        </a>
      </div>
      <p class="popup-event-subtitle">Google Map</p>
      <div id="g-map" class="g-map"></div>
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
                <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/happy.png" alt="reaction-happy">
                  <span class="bold">Happy</span>
                </p>
                <p class="simple-dropdown-text">Matt Parker</p>
                <p class="simple-dropdown-text">Vinayak Singh</p>
                <p class="simple-dropdown-text">Shivani Jain</p>
              </div>
            </div>
            <div class="reaction-item">
              <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/love.png"
                alt="reaction-love">
              <div class="simple-dropdown padded reaction-item-dropdown">
                <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/love.png" alt="reaction-love">
                  <span class="bold">Love</span>
                </p>
                <p class="simple-dropdown-text">Sandra Strange</p>
              </div>
            </div>
            <div class="reaction-item">
              <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/like.png"
                alt="reaction-like">
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
              <p class="meta-line-text">14 Participants</p>
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
            <p class="post-comment-text"><a class="post-comment-text-author" href="#">Destroy
                Dex</a>Can't wait to see everyone at the party! Last year's was incredible and I'm hoping this
              year will be even better!</p>
            <div class="content-actions">
              <div class="content-action">
                <div class="meta-line">
                  <div class="meta-line-list reaction-item-list small">
                    <div class="reaction-item">
                      <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/happy.png"
                        alt="reaction-happy">
                      <div class="simple-dropdown padded reaction-item-dropdown">
                        <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/happy.png"
                            alt="reaction-happy"> <span class="bold">Happy</span></p>
                        <p class="simple-dropdown-text">Marcus Jhonson</p>
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
      <script src="js/vendor/tiny-slider.min.js"></script>
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