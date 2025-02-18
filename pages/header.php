<?php include './includes/content/home-content.php' ?>
<header class="header--section-block">
  <div class="inner">
    <nav>
      <div class="logo">
        <img src="<?php echo $headerlogo ?>" alt="<?php echo $headerlogotxt ?>">
      </div>
      <ul class="nav--menu-desktop">
        <li><a href="#about"><?php echo $headerabout ?></a></li>
        <li><a href="#work"><?php echo $headerwork ?></a></li>
        <li><a href="#projects"><?php echo $headerprojects ?></a></li>
        <li><a href="#blogs"><?php echo $headerblogs ?></a></li>
      </ul>

      <div class="ham--menu-mobile" data="ham--menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>

    <div class="off--screen-menu">
      <ul>
        <li><a href="#about"><?php echo $headerabout ?></a></li>
        <li><a href="#work"><?php echo $headerwork ?></a></li>
        <li><a href="#projects"><?php echo $headerprojects ?></a></li>
        <li><a href="#blogs"><?php echo $headerblogs ?></a></li>
      </ul>
    </div>
  </div>
</header>