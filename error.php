<?php
http_response_code(404); // Tell the browser it's a 404
include './include/head.php';
include './include/header.php';
?>

<section class="tdc--error__pages">
  <div class="inner">
    <div class="tdc--toggle__container">
      <p><a href="../index.php" class="tdc--transition__link"><i class="fa-solid fa-arrow-left"></i> back to
          homepage</a>
      </p>
    </div>
    <div class="error-container">
      <h1>404 - Page Not Found</h1>
      <p>Sorry, the page you are looking for does not exist or has been moved.</p>
    </div>
  </div>
</section>

<?php include './include/footer.php'; ?>