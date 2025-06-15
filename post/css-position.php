<?php include __DIR__ . "/../include/head.php" ?>
<?php include __DIR__ . "/../include/header.php" ?>

<article class="tdc--writing__article">
  <div class="inner">

    <div class="tdc--toggle__container">
      <p><a href="../index.php" class="tdc--transition__link"><i class="fa-solid fa-arrow-left"></i> back to
          homepage</a>
      </p>
    </div>

    <section class="tdc--toggle__content">
      <h3>CSS Position</h3>
      <p class="mx--blend">
        Positioning help us to control our elements into a place.
      </p>

      <div class="tdc--csspos__container">
        
        <div class="tdc--csspos__box">
          <h4>Here are the different types of positioning.</h4>

          <div class="tdc--csspos__opt">
            <pre>
              <code class="language-css">
    position: static; /* default */
    position: relative;
    position: absolute;
    position: sticky;
    position: fixed;
    position: inherit;
            </code>
          </pre>
        </div>


          <div class="tdc--csspos__content">
            <h4>Static</h4>
            <p class="mx--blend">A default position in every situation. It is always positioned according to the normal page.</p>

            <div class="css--box__descriptive">
              
            <div class="code--emphasis">
              <code class="language-css">
                position: static;
              </code> <br/>
              <code class="language-css">
                left: 0;
              </code> <br/>
              <code class="language-css">
                top: 0;
              </code><br/>
            </div>

              <div class="box--content"></div>

            </div>

          </div>

          <hr/>

          <div class="tdc--csspos__content">
            <h4>Relative</h4>
            <p class="mx--blend">A positioned relative to its normal position. It allows to direct in every position we decided. <br/>
            When we don't declare any value to a position, it'll act like it's Static <br/>
            We can use the top, right, bottom and left position to push every element.</p>

            <div class="css--box__descriptive">
              
              <div class="code--emphasis">
                <code class="language-css">
                  position: relative;
                </code> <br/>
                <code class="language-css">
                  left: 150px;
                </code> <br/>
                <code class="language-css">
                  top: -50px;
                </code><br/>
              </div>

                <div class="box--content box--relative"></div>

            </div>

          </div>

          <hr/>

          <div class="tdc--csspos__content">
            <h4>Absolute</h4>
            <p class="mx--blend">A position that can remove the Element from the document flow and position itself in reference to a container and a container has to have a position assigned to it as well.<br/>
            A container element has a relative position wonder why it is centered in the browser.<br/>
            The text overlaps the image, just because both have positioned in Absolute</p>

            <div class="css--box__descriptive">
              
              <div class="code--emphasis">
                <code class="language-css">
                  position: absolute;
                </code> <br/>
                <code class="language-css">
                  right: 0;
                </code> <br/>
                <code class="language-css">
                  top: -140px;
                </code><br/>
              </div>

                <div class="box--content box--absolute"></div>

            </div>

          </div>

          <hr/>

          <div class="tdc--csspos__content">
            <h4>Sticky</h4>

            <div class="box--content box--sticky"></div>

            <p class="mx--blend">Sticky positioning is a hybrid of relative and fixed positioning. The element is treated as relative positioned until it crosses a specified threshold, at which point it is treated as fixed positioned. - Mozilla Foundation, MDN Web docs</p>

            <div class="css--box__descriptive">
              
              <div class="code--emphasis">
                <code class="language-css">
                  position: sticky;
                </code> <br/>
                <code class="language-css">
                  top: 0;
                </code><br/>
              </div>

            </div>

          </div>

          <hr/>

          <div class="tdc--csspos__content fixed--content">
            <h4>Fixed</h4>

            <div class="box--content box--fixed">
              <p>I AM FIXED</p>
            </div>

            <p class="mx--blend">Sticky positioning is a hybrid of relative and fixed positioning. The element is treated as relative positioned until it crosses a specified threshold, at which point it is treated as fixed positioned. - Mozilla Foundation, MDN Web docs</p>

            <div class="css--box__descriptive">
              
              <div class="code--emphasis">
                <code class="language-css">
                  position: fixed;
                </code> <br/>
                <code class="language-css">
                  left: 50px;
                </code> <br/>
                <code class="language-css">
                  top: 50px;
                </code><br/>
              </div>

              <p> The fixed box is floating top left area. Below is extra space for scroll to test the positioning. </p>

            </div>

          </div>

          <hr/>


        </div>

      </div>

    </section>

</div>
</article>

<?php include __DIR__ . "/../include/footer.php" ?>