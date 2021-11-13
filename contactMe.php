<?php include("base.php"); ?>

<form action="https://formspree.io/dstocking0823@gmail.com" method="POST">
            <div class="dark">
            <div class="contact-title">
                <h1>LET'S CHAT</h1>
            </div>

            <label>

                <input type="email" name="email" class="email" placeholder="Your email" required/>
            </label>

            <label>

                <input type="text" name="subject" class="subject" placeholder="Your name" required/>
            </label>

            <label>

                <textarea name="message" class="message" placeholder="Message" rows="4" required> </textarea>
            </label>
            <div class="status">

            </div>
            <button type="submit" class="submit">
                Send Message
            </button>
            </div>
        </form>
        <?php include("footer.php"); ?>
    </body>
</html>