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
                  <td><code class="language-bash">true or false</code></td>
                </tr>
                <tr>
                  <td>Null</td>
                  <td>null</td>
                </tr>
                <tr>
                  <td>undefined</td>
                  <td><code class="language-bash">undefined</code></td>
                </tr>
                <tr>
                  <td>Symbol</td>
                  <td><code class="language-bash">Symbol('something')</code></td>
                </tr>
                <tr>
                  <td>Object</td>
                  <td><code class="language-bash">{ key: 'value' }</code></td>
                </tr>
                <tr>
                  <td>Array</td>
                  <td><code class="language-bash">[1, "text", false]</code></td>
                </tr>
                <tr>
                  <td>Function</td>
                  <td><code class="language-bash">function functionName(){ }</code></td>
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
              <code class="language-bash">
                let foo = 7 + "2";
              </code>
            </div>

            <div class="code--container__explanation">
              <p><code class="language-bash">var, let, const</code> - <strong>Keyword / Reserved word</strong> <br /> Any
                word that
                is part of the vocabulary of the programming language is called a keyword.
              </p>

              <p><code class="language-bash">foo</code> - <strong>Variable</strong> <br /> A named reference to a value
                is a variable.</p>

              <p><code class="language-bash"> = + - * in === typeof != </code> - <strong>Operator</strong> <br />
                Operators
                are
                reserved-words
                that perform action on values and variables Example: </p>

              <p><code class="language-bash"> 7, "2" </code> - <strong>Expressions</strong> <br /> A reference, value or
                a group of reference(s) and value(s) combined with operator(s) which result in a single value.</p>

              <p><code class="language-bash"> let foo = 7 + "2"; </code> - <strong>Statement</strong> <br /> A group of
                words, numbers and operators that do a task is a statement.</p>

            </div>
          </div>
        </div>

        <div class="accordion--holder__item">
          <h4 class="accordion--holder__title">Object</h4>
          <div class="accordion--holder__content">
            <p>An Object is a data type in JavaScript that is used to store a combination of data in a simple key-value
              pair.</p>

            <div class="language-bash">
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

              <p><code class="language-bash">name, age, gender, isMarried ...</code> - <strong>Key</strong> <br /> These
                are the keys in user in Object.</p>

              <p><code class="language-bash">"John Doe", 22, male, false ...</code> - <strong>Value</strong> <br />
                These
                are the values of the respective keys in user object.</p>

              <p><code class="language-bash">function() {}</code> - <strong>Method</strong> <br />
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
                <code class="language-bash">
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

              <p><code class="language-bash">someName</code> - <strong>Name of Function</strong>
                <br /> A function should be descriptive of what it does.
              </p>

              <p><code class="language-bash">param1, param2</code> - <strong>Parameters / Arguments </strong> <br />
                A function can optionally take parameters (arguments). The function can then use this information within
                the code.
              </p>

              <p><code class="language-bash">return</code> - <strong>Return</strong> <br />
                A function can optionally spit-out or "return" a value once its invoked. Once a function returns, no
                further lines of code within the function run.
              </p>

              <p><code class="language-bash">function someName(param1, param2) { ... }</code> - <strong>Code
                  Block</strong>
                <br />
                Any code within the curly braces {...} is called a "block of code", "code block" or simply "block". This
                concept is not just limited to functions. "If statements", "for loops", and other statements use code
                blocks as well.
              </p>

              <p><code class="language-bash">someName("Me", "You")</code> - <strong>Invoke a function</strong>
                <br />
                Invoking, calling or running a function all mean the same thing. When we write the function name, in the
                case someName, followed by the brackets symbol () like this someName(), the code inside the function
                gets executed.
              </p>

              <p><code class="language-bash">("Me", "You")</code> - <strong>Passing Parameters to a function</strong>
                <br />
                When we invoke a function, we can pass in values to the function. These values are called parameters or
              </p>

            </div>

          </div>
        </div>

        <div class="accordion--holder__item">
          <h4 class="accordion--holder__title">Vocabulary around Variables & Scope</h4>
          <div class="accordion--holder__content">
            <div class="code--container__explanation">

              <p><strong>Scope</strong>
                <br />The limits where the variable exists.
              </p>

              <p><strong>Global Scope</strong>
                <br /> The outer most scope called the Global scope.
              </p>

              <p><strong>Functional Scope</strong>
                <br /> Any variables inside a function is in a scope of the function.
              </p>

              <p><strong>Lexical Environment (Lexical Scope)</strong>
                <br /> The physical location (scope) where a variable or function is declared is its lexical environment
                (lexical scope).
              </p>

              <p><strong>RULE:</strong>
                <br /> (1) Variables in the outer scope can be accessed in a nested scope; But variables inside a nested
                scope CANNOT be accessed by the outer scope. (Private variables) <br />

                (2) Variables are picked up from the lexical environment.
              </p>

              <hr /> <br />

              <p><code class="language-bash">let a;</code> - <strong>Variable Declaration</strong>
                <br /> Declaring a variable means creating a variable.
              </p>

              <p><code class="language-bash">a = 12</code> - <strong>Variable Initialization</strong>
                <br /> An initial value is assigned to the variable.
              </p>

              <p><code class="language-bash">a = "me"</code> - <strong>Variable Assignment</strong>
                <br /> Assigning a value to a variable that has already been declared.
              </p>

              <p><code class="language-bash">console.log(a); var a = "me"</code> - <strong>Hoisting</strong>
                <br /> Variables are declared at the top of the function automatically, and initialized at the same time
                they run.
                <code class="language-bash">Uncaught ReferenceError: a is not defined.</code>
              </p>

              <hr /> <br />

              <div class="language-bash">
                <p><strong>Scope Chain</strong> <br />
                  The nested hierarchy of scope is called the scope chain. The JS Engine looks for a variable in the
                  scope chain upwards (it is ancestors, until found).
                </p>
                <pre>
                <code>
    let a = "global";

    function first() {
      let a = "fresh";

      function second() {
        console.log(a); <span class="comment--code">// fresh</span>
      }

      second();
    }

    first();
                </code>
              </pre>
              </div>

              <ul class="code--container__list">
                <li>JavaScript uses the scope chain to resolve variables from inner to outer scopes.</li>
                <li><code class="language-bash">second()</code> is defined inside <code class="language-bash">first()</code>, so ist closes over the
                  variables in <code class="language-bash">first()</code> scope.</li>
                <li>When <code class="language-bash">second()</code> access a, it finds "fresh" in <code class="language-bash">first()</code> and stops
                  searching - it does not access the
                  global a.</li>
                <li>Therefore, if <code class="language-bash">second()</code> is called, it will log "fresh".</li>
              </ul>


            </div>
          </div>
        </div>

        <div class="accordion--holder__item">
          <h4 class="accordion--holder__title">Operators</h4>
          <div class="accordion--holder__content">
            <p>Operators are reserved-words that perform action on values and variables.</p>

            <table>
              <thead>
                <th>Arithmetic</th>
                <th>Assignment</th>
                <th>Logical</th>
                <th>Equality</th>
              </thead>
              <tbody>
                <tr>
                  <td><code class="language-bash"> + add</code></td>
                  <td><code class="language-bash"> = Assign Value </code></td>
                  <td> <code class="language-bash"> || OR </code> </td>
                  <td><code class="language-bash"> === Equality </code> </td>
                </tr>
                <tr>
                  <td><code class="language-bash"> - Subtraction </code></td>
                  <td><code class="language-bash"> += Add then Assign </code></td>
                  <td><code class="language-bash"> && AND </code></td>
                  <td><code class="language-bash"> == Equality with coercion </code></td>
                </tr>
                <tr>
                  <td><code class="language-bash"> *</code> Multiply</td>
                  <td> <code class="language-bash">-=</code> Subtract then Assign</td>
                </tr>
                <tr>
                  <td> <code class="language-bash">/</code> Divide</td>
                  <td> <code class="language-bash">*=</code> Multiply then Assign</td>
                </tr>
                <tr>
                  <td> <code class="language-bash">%</code> remainder</td>
                </tr>
                <tr>
                  <td> <code class="language-bash">**</code> Exponential</td>
                </tr>
              </tbody>
            </table>

            <table>
              <thead>
                <th>Conversion</th>
                <th>Relational / Comparison</th>
                <th>Increment / Decrement</th>
              </thead>
              <tbody>
                <tr>
                  <td> <code class="language-bash">+</code> Convert to a number</td>
                  <td> <code class="language-bash">>= </code> Greater than equal to </td>
                  <td> <code class="language-bash">++</code> Postfix increment <br /> <code class="language-bash">--</code> Postfix decrement</td>
                </tr>
                <tr>
                  <td> <code class="language-bash">-</code> Convert to number then negate it</td>
                  <td>
                    <code class="language-bash"><=</code> Greater than equal to </td>
                  <td> <code class="language-bash">++</code> Prefix increment <br /> <code class="language-bash">--</code> Prefix decrement</td>
                </tr>
                <tr>
                  <td><code class="language-bash">!</code> Convert to boolean then inverse it</td>
                  <td><code class="language-bash">!=</code> Not equal after coercion </td>
                </tr>
                <tr>
                  <td><code class="language-bash">!==</code> Not equal </td>
                </tr>
              </tbody>
            </table>

            <table>
              <thead>
                <th>Operator</th>
                <th>Uses</th>
              </thead>
              <tbody>
                <tr>
                  <td><code class="language-bash">typeof</code></td>
                  <td>Returns the type of a variable (e.g., typeof "hello" → "string")</td>
                </tr>
                <tr>
                  <td><code class="language-bash">instanceof</code></td>
                  <td>Checks if an object is an instance of a constructor (e.g., x instanceof Array)</td>
                </tr>
                <tr>
                  <td><code class="language-bash">()</code></td>
                  <td>Grouping operator or used to invoke functions (e.g., sum())</td>
                </tr>
                <tr>
                  <td><code class="language-bash">... (spread)</code></td>
                  <td>Spread (or rest) operator: spreads elements or collects rest args (e.g., [...arr],
                    function(...args))</td>
                </tr>
                <tr>
                  <td><code class="language-bash">.</code></td>
                  <td>Property access (e.g., obj.name)</td>
                </tr>
                <tr>
                  <td><code class="language-bash">[ ]</code></td>
                  <td>Bracket notation for property access (e.g., obj["name"])</td>
                </tr>
                <tr>
                  <td><code class="language-bash">new</code></td>
                  <td>Creates an instance of an object (e.g., new Date())</td>
                </tr>
                <tr>
                  <td><code class="language-bash">delete</code></td>
                  <td>Deletes a property from an object (e.g., delete obj.key)</td>
                </tr>
                <tr>
                  <td><code class="language-bash">?.. : ..</code> (ternary)</td>
                  <td>Ternary conditional operator (e.g., condition ? value1 : value2)</td>
                </tr>
              </tbody>
            </table>

            <p><strong>Operators Precedence</strong> <br /> Given Multiple operators are used in an expression, the
              'Operator Precedence' determines which operators will be executed first. The higher the precedence, the
              earlier it will get executed. <br />
              E.G. 8 * 4 + 2 -> The first operator to be executed is * (multiplication) and then + (addition).
            </p>

            <p><strong>Operators Associativity</strong> <br /> Given Multiple operators have the same
              precedence,"associativity" determines in which direction the code will be parsed.
            </p>

          </div>
        </div>

      </div>



    </div>

  </div>
</article>


<?php include __DIR__ . "/../include/footer.php" ?>