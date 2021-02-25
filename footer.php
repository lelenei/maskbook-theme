<?php
/*
** The template for displaying the footer
** Contains the closing of the #content div and all content after
**
** @link
**
** @package WordPress
** @subpackage Maskbook_News
** @since Maskbook News 1.0
*/
?>

            </div> <!-- #content -->
            <footer id='footer' class='siter-footer'>

                <div class="site-info">
                    <div class="main">
                        <p>Mask Network is a Free Software developed and maintained by Dimension.
    </br>The source code of Mask Network is available on GitHub.<p>
                        <div class='register-form'>
                            <h3>Get latest news and updates</h3>
                            <form name="subscription" method="post" target="_blank" novalidate="" action="https://dimension.us20.list-manage.com/subscribe/post?u=bd44f8df98ab3d8daf8bbe020&amp;id=d23c8870f6">          
                                <input type="email" name="EMAIL" placeholder="Subscribe"><button type="submit" style="cursor: pointer;"></button>
                            </form>
                        </div>
                        <nav class='footer-social-menu'>
                            <a href="https://www.facebook.com/groups/324857694838456" title="Facebook" target="_blank"></a>
                            <a href="https://twitter.com/realmaskbook" title="Twitter" target="_blank"></a>
                            <a href="https://github.com/DimensionDev" title="GitHub" target="_blank"></a>
                            <a href="https://t.me/maskbook_group#telegram" title="Telegram" target="_blank"></a>
                            <a href="https://discord.gg/4SVXvj7" title="Discord" target="_blank"></a>
                        </nav>
                    </div>
                    <div class='footer-menu'>
                        <nav>
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'footer',
                                        'container'      => false,
                                        'menu_class'     => 'footer-menu',
                                        'depth'          => 1,
                                    )
                                    );
                            ?>
                        </nav>
                    </div>
                </div> <!-- site-ifno -->

                <div class="site-info2">
                    <p>I thought what I’d do was, I’d pretend I was one of those deaf-mutes.</p>
                </div>
            </footer>
        <?php wp_footer();?>
    </body>
</html>