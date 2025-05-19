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
      <h3>The JS Basics</h3>
      <p>
        When I started to learn JavaScript I used to look up with the basics and core of the language. <br />
        I wanted to create a simple way to maximize my time.
      </p>

      <p>I included the statements and explanation of the syntaxes. This could be a help for the future review.</p>

      <div class="tdc--accordion__holder">

        <div class="accordion--holder__item">
          <h4 class="accordion--holder__title">The Seven (7) Types</h4>
          <div class="accordion--holder__content">
            <table>
              <thead>
                <th>Primitive Types</th>
                <th>Execution</th>
              </thead>
              <tbody>
                <tr>
                  <td>Strings</td>
                  <td>"This is a string."</td>
                </tr>
                <tr>
                  <td>Numbers</td>
                  <td>123</td>
                </tr>
                <tr>
                  <td>Boolean</td>
                  <td><code class="code--markup">true or false</code></td>
                </tr>
                <tr>
                  <td>Null</td>
                  <td>null</td>
                </tr>
                <tr>
                  <td>undefined</td>
                  <td><code class="code--markup">undefined</code></td>
                </tr>
                <tr>
                  <td>Symbol</td>
                  <td><code class="code--markup">Symbol('something')</code></td>
                </tr>
                <tr>
                  <td>Object</td>
                  <td><code class="code--markup">{ key: 'value' }</code></td>
                </tr>
                <tr>
                  <td>Array</td>
                  <td><code class="code--markup">[1, "text", false]</code></td>
                </tr>
                <tr>
                  <td>Function</td>
                  <td><code class="code--markup">function functionName(){ }</code></td>
                </tr>
              </tbody>
            </table>

            <p>NOTE: Arrays and functions are considered special types of objects.</p>
          </div>
        </div>

        <div class="accordion--holder__item">
          <h4 class="accordion--holder__title">Basic Vocabulary</h4>
          <div class="accordion--holder__content">

            <div class="code--container__content">
              <code>
                let foo = 7 + "2";
              </code>
            </div>

            <div class="code--container__explanation">
              <p><code class="code--markup">var, let, const</code> - <strong>Keyword / Reserved word</strong> <br /> Any
                word that
                is part of the vocabulary of the programming language is called a keyword.
              </p>

              <p><code class="code--markup">foo</code> - <strong>Variable</strong> <br /> A named reference to a value
                is a variable.</p>

              <p><code class="code--markup"> = + - * in === typeof != </code> - <strong>Operator</strong> <br />
                Operators
                are
                reserved-words
                that perform action on values and variables Example: </p>

              <p><code class="code--markup"> 7, "2" </code> - <strong>Expressions</strong> <br /> A reference, value or
                a group of reference(s) and value(s) combined with operator(s) which result in a single value.</p>

              <p><code class="code--markup"> let foo = 7 + "2"; </code> - <strong>Statement</strong> <br /> A group of
                words, numbers and operators that do a task is a statement.</p>

            </div>
          </div>
        </div>

        <div class="accordion--holder__item">
          <h4 class="accordion--holder__title">Object</h4>
          <div class="accordion--holder__content">
            <p>An Object is a data type in JavaScript that is used to store a combination of data in a simple key-value
              pair.</p>

            <div class="code--container__content">
              <pre>
                <code>
    let user = {
      name: "John Doe",
      age: 22,
      gender: "Male",
      isMarried: false,
      hobbies: ["reading","gaming"],
      address: {
        street: "123 Main St",
        city: "New York",
        state: "NY"
      },
      calculateAge: function() {
        return 2023 - this.age;
      },
    }
                </code>
              </pre>
            </div>

            <div class="code--container__explanation">

              <p><code class="code--markup">name, age, gender, isMarried ...</code> - <strong>Key</strong> <br /> These
                are the keys in user in Object.</p>

              <p><code class="code--markup">"John Doe", 22, male, false ...</code> - <strong>Value</strong> <br />
                These
                are the values of the respective keys in user object.</p>

              <p><code class="code--markup">function() {}</code> - <strong>Method</strong> <br />
                If a key has a function as a value, it's called a method.
              </p>

            </div>

          </div>
        </div>

        <div class="accordion--holder__item">
          <h4 class="accordion--holder__title">Function</h4>
          <div class="accordion--holder__content">
            <p>A function is simply a bunch of code bundled in a section. This bunch of code ONLY runs when the function
              is called. Functions allows for organizing code into sections and code reusability. <br /><br />
              Using a function has ONLY two parts. <br />
              (1) Declaring / Defining a function and <br />
              (2) Using / running a function.
            </p>

            <div class="code--container__content">
              <pre>
                <code>
    <span class="comment--code">// Function Declaration / Function Statement</span>
    function someName(param1, param2) {

      <span class="comment--code">// bunch of code as needed...</span>
      let foo = param1 + "love" + param2;
      return foo;
    }

    <span class="comment--code">// Invoke (run / call) a function</span>
    someName("Me", "You");
                </code>
              </pre>
            </div>

            <div class="code--container__explanation">

              <p><code class="code--markup">someName</code> - <strong>Name of Function</strong>
                <br /> A function should be descriptive of what it does.
              </p>

              <p><code class="code--markup">param1, param2</code> - <strong>Parameters / Arguments </strong> <br />
                A function can optionally take parameters (arguments). The function can then use this information within
                the code.
              </p>

              <p><code class="code--markup">return</code> - <strong>Return</strong> <br />
                A function can optionally spit-out or "return" a value once its invoked. Once a function returns, no
                further lines of code within the function run.
              </p>

              <p><code class="code--markup">function someName(param1, param2) { ... }</code> - <strong>Code
                  Block</strong>
                <br />
                Any code within the curly braces {...} is called a "block of code", "code block" or simply "block". This
                concept is not just limited to functions. "If statements", "for loops", and other statements use code
                blocks as well.
              </p>

              <p><code class="code--markup">someName("Me", "You")</code> - <strong>Invoke a function</strong>
                <br />
                Invoking, calling or running a function all mean the same thing. When we write the function name, in the
                case someName, followed by the brackets symbol () like this someName(), the code inside the function
                gets executed.
              </p>

              <p><code class="code--markup">("Me", "You")</code> - <strong>Passing Parameters to a function</strong>
                <br />
                When we invoke a function, we can pass in values to the function. These values are called parameters or
              </p>

            </div>

          </div>
        </div>

      </div>



    </div>

  </div>
</article>


<?php include __DIR__ . "/../include/footer.php" ?>