<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./output.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
        <?php wp_head() ?>
    </head>
    <body>
    
<header class="header py-5">
    <div class="container">
        <div class="headerWrapper flex items-center justify-between border-b-2 border-dark">
            <div class="branding w-14">
                <!-- <img src="../images/Logo3.png" alt=""> -->
                <?php
                    if (function_exists('the_custom_logo')){
                        the_custom_logo();
                    }
                    ?>
            </div>
            <div class="headerNav">
            <?php wp_nav_menu();?>
            </div>
        </div>
    </div>
</header>