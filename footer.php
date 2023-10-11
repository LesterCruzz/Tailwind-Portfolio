<?php wp_footer(); ?>

<footer class="footer">
    <div class="container">
        <div class="footerWrapper lg:flex lg:items-center lg:justify-between border-t-2 border-dark">
            <div class="branding w-14">
            <?php
                    if (function_exists('the_custom_logo')){
                        the_custom_logo();
                    }
                    ?>
            </div>
            <div class="footertext">
                <p>©Cruzz</p>
            </div>
        </div>
    </div>
</footer>

    </body>
    </html>