<?php include __DIR__ . "/../include/head.php" ?>
<?php include __DIR__ . "/../include/header.php" ?>

<article class="tdc--writing__article">
  <div class="inner">

    <div class="tdc--toggle__container">
      <p><a href="../index.php" class="tdc--transition__link"><i class="fa-solid fa-arrow-left"></i> back to
          homepage</a>
      </p>
    </div>

    <div class="tdc--toggle__content">
      <h3>Equal heights</h3>

      <p>I was working on a landing page website project. There's something I need to evaluate regarding the design of
        their Figma.</p>

      <p>Since the boxes have their different parent and that parent is only displayed as "flex". The only thing that
        comes to my mind is manipulating them using a script or jQuery. jQuery because that is one library they use from
        their previous projects and as a developer I need to adapt their environments.</p>

      <p>I tried this script:</p>

      <div class="code--container">
        <pre>
            <code class="language-javascript">
            function cBoxItemHeight() {
              function getMaxHeight(className) {
                let max = 0;
                document.querySelectorAll(className).forEach(function (el) {

                  if (el.scrollHeight > max) {
                    max = el.scrollHeight;
                  }
                });
                return max;
              }
              function setHeight(className, height) {
                document.querySelectorAll(className).forEach(function (el) {
                  el.style.height = height + "px";
                });
              }
              let max = getMaxHeight(".s4__text-coating");
              setHeight(".s4__text-coating", max);
            }
            $(window).resize(function () {
              cBoxItemHeight();
            });
            cBoxItemHeight();
          </code>
        </pre>
      </div>

      <p>It will save you in the meantime. Hard code it later when you need to think about Vanilla JS. It also helps to
        follow the design in Figma when resizing the browser.</p>


    </div>

  </div>
</article>


<?php include __DIR__ . "/../include/footer.php" ?>