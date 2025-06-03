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
        <h3>The Power Of Git</h3>
        <p>Did you know that 80% of the project the git is involved?</p>
        <p>When I work as desktop support as my first job. I will make a time to learn with the developers in our department. <br/>
            My interest and willing to get back in programming made me curious of how they solve a certain problems. <br/>
            It's cool and a great responsibility at the same time, as I saw the terminal they type in the commandline. <br/>
            I understand that I should be flexible using tools.
        </p>
        <p>And the one thing should I learn is <code class="language-bash">git</code>.</p>

        <div class="tdc--git__container">
            <div class="tdc--git__box">
                <h4>Git Workflow: One-time Setup</h4>

                    <pre>
                        <code class="language-bash">
    git clone https://github.com/repository-guide.git
    cd repo 
    git remove -v  # View remotes
                        </code>
                    </pre>

                    <span>If you're contributing in an Open-Source.</span>

                    <pre>
                        <code class="language-bash">
    git clone https://github.com/your-username/repository.git
    cd repo 
    git remote add upstream https://github.com/original-owner/repository.git
                        </code>
                    </pre>

            </div>
            <div class="tdc--git__box">
                <h4>Daily Start</h4>

                    <pre>
                        <code class="language-bash">
    # Team project
    git pull origin main 

    # Open-Source 
    git fetch upstream
    git checkout main
    git merge upstream/main
                        </code>
                    </pre>
            </div>

            <div class="tdc--git__box">
                <h4>Create a Feature or BugFix Branch</h4>

                    <pre>
                        <code class="language-bash">
    git checkout -b feature/your-feature-branch
                        </code>
                    </pre>

                    <p>
                        <code class="language-bash">feature/</code> - for new features <br/>
                        <code class="language-bash">fix/</code> - for bug fixes <br/>
                        <code class="language-bash">hotfix/</code> - for critical fixes <br/>
                    </p>
            </div>

            <div class="tdc--git__box">
                <h4>Code & Track Changes</h4>

                <pre>
                    <code class="language-bash">
    git status  # Check status, changes, and untracked files
    git add .   # Stage all changes
    git commit -m "Your commit message"  # Commit changes with a message
                    </code>
                </pre>

                <p>
                    <strong>NOTE</strong>: Commit messages should be clear <br/>
                    Use Imperative: "Add login feature" <br/>
                    Reference Issue Numbers: <code class="language-bash">Fix #001: Handle empty states.</code>
                </p>
            </div>

            <div class="tdc--git__box">
                <h4>Push Branches</h4>

                <pre>
                    <code class="language-bash">
    git push origin feature/your-feature-repo
                    </code>
                </pre>

            </div>

            <div class="tdc--git__box">
                <h4>Create a Pull Request</h4>

                <div>
                    <code>1. Go to GitHub</code> <br/>
                    <code>2. Open a <strong>Pull Request</strong> from your branch to <code class="">main</code> or <code class="">develop</code></code> <br/>
                    <code>3. Add a Description, Screenshots and linked issues.</code>
                </div>

            </div>

            <div class="tdc--git__box">
                <h4>Merge</h4>

                <pre>
                    <code class="language-bash">
    git checkout main 
    git pull origin main
    git merge feature/your-feature-name
    git push origin main
                    </code>
                </pre>

                <p>
                    Optionally, you can delete the branch after merge. <br/>
                    Why? <br/>
                    This is the <a href="https://medium.com/@pipulpant/why-you-should-delete-merged-branches-in-git-c04f3f5d5948">reason</a>.
                </p>

                <pre>
                    <code class="language-bash">
    git branch -d feature/your-feature-name
    git push origin --delete feature/your-feature-name
                    </code>
                </pre>
            </div>

            <div class="tdc--git__box">
                <h4>Cleanup</h4>

                <pre>
                    <code class="language-bash">
    git fetch -p    # Remove deleted branches from remote
    git branch -a   # List all branches
                    </code>
                </pre>
            </div>

            <div class="tdc--git__box">
                <h4>Undo or Roll Back (Safe Tools)</h4>

                <pre>
                    <code class="language-bash">
    git log         # View Commit History
    git checkout <commit-hash>  # View code from older commit 
    git revert <commit-has>     # Undo with a new commit
                    </code>
                </pre>
            </div>

            <div class="tdc--git__box">
                <h4>Tip: </h4>

                <div>
                    <span>1. Use <code>.gitignore</code> to avoid committing unwanted files. </span> <br/>
                    <span>2. Make Atomic Commits: One logical change per commit. </span> <br/>
                    <span>3. Pull before pushing to avoid conflicts. </span> <br/>
                    <span>4. Resolve conflicts carefully, then <code class="language-bash">git add</code> and <code class="language-bash">git commit</code> </span> <br/>
                </div>

            </div>

        </div>

      </section> <!-- End of section -->

    </div> <!-- End of inner -->
  </div> <!-- End of tdc--writing__article -->
</article>

<?php include __DIR__ . "/../include/footer.php" ?>