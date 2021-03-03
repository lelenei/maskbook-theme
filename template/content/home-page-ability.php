
<?php
/**
 * Template part for home page 
 *
 * @link 
 *
 * @package WordPress
 * @subpackage Maskbook_WP_News
 * @since Maskbook New 1.0
 */

?>

<div class="page-section-header">
    <h2 class="page-section-title">What can Mask Network do?</h2>
</div>

<div class="page-section-body">
      <div>
        <div>
          <div >
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Group 425.svg">
            <p>
              <b>Send encrypted posts</b>
              to friends
            </p>
          </div>
        </div>
        <div>
          <div class='video' source="<?php echo get_template_directory_uri(); ?>/assets/video/1. message_batch.mp4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Group 458.svg">
            <h3>Demo 1: Send an encrypted message</h3>
            <p>Cool people sends stuff to cool people living in cool places</p>
          </div>
        </div>
      </div>
      <div>
        <div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Group 414.svg">
            <p>
              <b>Send &amp; receive crypto currency</b>
              on social network
            </p>
          </div>
        </div>
        <div>
          <div class='video' source="<?php echo get_template_directory_uri(); ?>/assets/video/2. file_batch.mp4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Group 458.svg">
            <h3>Demo 2: Send &amp; receive crypto</h3>
            <p>Cool people sends stuff to cool people living in cool places</p>
          </div>
        </div>
      </div>
      <div>
        <div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Group 424.svg">
            <p>
              <b>Support Gitcoin funding directly</b>
              on Twitter
            </p>
          </div>
        </div>
        <div>
          <div class='video' source="<?php echo get_template_directory_uri(); ?>/assets/video/3. red packet_batch.mp4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Group 458.svg">
            <h3>Demo 3: Support Gitcoin grants directly on Twitter</h3>
            <p>Cool people sends stuff to cool people living in cool places</p>
          </div>
        </div>
      </div>
      <div>
        <div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Group 426.svg">
            <p>
              <b>Decentralized file storage</b>
              and sharing
            </p>
          </div>
        </div>
        <div>
          <div class='video' source="<?php echo get_template_directory_uri(); ?>/assets/video/4. trade_batch.mp4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/Group 458.svg">
            <h3>Demo 4: Decentralized file storage and sharing</h3>
            <p>Cool people sends stuff to cool people living in cool places</p>
          </div>
        </div>
      </div>
</div>

<div class="page-section-footer">
    <h2 class="page-section-title">Convinced? Curious? Let’s try out!</h2>
    <div class="open-store">
        <a class="link-button" href="https://chrome.google.com/webstore/detail/jkoeaghipilijlahjplgbfiocjhldnap">
            Get Mask
        </a>
        <span class="link-description">
            For <span title="Google Chrome">Chrome</span>, <span title="Microsoft Edge">Edge</span>, <span title="Mozilla Firefox">Firefox</span>,<br>
            and Chromium-based browsers.
        </span>
    </div>
</div>


<div class="modal fade"  id="videoDialog" tabindex="-1" role="dialog" aria-labelledby="videoDialogLabel" aria-hidden="true" data-keyboard="false" >
  <div class="modal-dialog" style='width: 1280px;height:720px;'>
        <video id="Video" style='margin-top:200px' controls  width='1280' height='720' title="video element">
        </video>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
