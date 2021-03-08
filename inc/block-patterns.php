<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package WordPress
 * @subpackage Maskbook News
 * @since Maskbook News 1.0
 */

if ( function_exists( 'register_block_pattern_category' ) ) {

    register_block_pattern_category(
            'maskbook',
            array('label' => 'Maskbook Page' )
    );
}

if (!function_exists('register_blcok_pattern')) {

    register_block_pattern(
        'maskbook/title',
        array(
            'title'       => 'Title',
            'description' =>  'Home page title',
            'categories'  => array('maskbook'),
            'content'     => implode(
                '', 
                array(
                        '<div class="page-title-section">',
                            '<!--wp:heading-->',
                            '<h1 class="headline">The Portal to the New & Open Internet</h1>',
                            '<!--/wp:heading-->',
                            '<!--wp:paragraph-->',
                            '<p class="subline">
                            Encrypt your posts & chats on social networks <br>
                            Allow only your friends to decrypt.
                            </p>',
                            '<!--/wp:paragraph-->',
                        '</div>',
                  
        )))
    );

    register_block_pattern(
        'maskbook/line',
        array(
            'title'         => 'Line',
            'description'   => 'line',
            'categories'    => array('maskbook'),
            'content'       => implode(
                '',
                array(
                    '<div class="_line"></div>',
                )
            )
        )
    );

    register_block_pattern(
        'maskbook/core-feature',
        array(
            'title'         => 'Core-Feature',
            'description'   => 'core feature',
            'categories'    => array('maskbook'),
            'content'       => implode(
                '',
                array(
              
                    '<div class="page-core-feature">',
                        '<div class="page-section-header">',
                            '<div class="page-section-title">',
                                    '<div class="first-title">Encrypted</div>',
                                    '<div>+</div>',
                                    '<div>Decrypted</div>',
                                    '<div>Automatically</div>',
                            '</div>',
                           
                            '<p class="page-section-description">
                                <b>Mask Network</b> allows you to encrypt content when posting on <i>You-Know-Where.</i><br>
                                Only you and your friends can decrypt them.<br><br>
                                Not even developers of Mask Network.
                            </p>',
                   
                        '</div>',
                       
                        '<img src="'.get_template_directory_uri().'/assets/icons/Group 457.svg" class="illust">',
                      

                    '</div>',
          
                )
            )
        )
    );

    register_block_pattern(
        'maskbook/install-steps',
        array(
            'title'         => 'Install Steps',
            'description'   => 'Install Steps',
            'categories'    => array('maskbook'),
            'content'       => implode(
                '',
                array(
                    '<div class="page-section-body">',
                    '<div class="steps">',
                            '<article class="step">',
                            
                                '<h3 class="title">Install</h3>',
                                '<img src="'.get_template_directory_uri().'/assets/icons/Group 418.svg">',
                           
                                '<p class="tip">Install Mask Network extension on your favourite browsers to get started!<br><br>We support Chrome, Firefox, iOS and Android.</p>',
 
                               
                            '</article>',
                       
               
                            '<article class="step">',
                                '<h3 class="title">Verify</h3>',
                                '<img src="'.get_template_directory_uri().'/assets/icons/Group 419.svg">',
                                '<p class="tip">You will be guided through a few steps to verify your identity after Mask Network extension is installed. EZ.<br><br>Piece of cake, anyone?</p>',
                            '</article>',
                        
                            '<article class="step">',
                                '<h3 class="title">Enjoy</h3>',
                                '<img src="'.get_template_directory_uri().'/assets/icons/Group 420.svg">',
                                '<p class="tip">Whoa that was fast!<br>Now is the time we enjoy and embrace a more secure &amp; private Internet through the social network of your choice.</p>',
                            '</article>',
                        
                        
            
                   '</div>',
                '</div>',
                )
            )
        )
    );
}

 ?>