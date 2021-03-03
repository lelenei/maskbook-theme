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

<div class="page-title-section">
    <h1 class="headline">The Portal to the New & Open Internet</h1>
    <p class="subline">
      Encrypt your posts & chats on social networks <br>
      Allow only your friends to decrypt.
    </p>
</div>

<div class="_line"></div>

<div class="page-core-feature">
    <?php get_template_part('template/content/home-page', 'feature');?>
</div>

<div class='ability-section'>
    <?php get_template_part('template/content/home-page', 'ability'); ?>
</div>

<div class="meme-away-section">
    <div class="body">
      <h2>Meme away!</h2>
      <p>
        Digital life wouldn’t be completed without memes.<br>
        <b>Mask Network</b>‘s meme is a statement. We stand for better privacy and security for all.<br>
        <br>
        Let’s meme it until we make it.<br>
        <b>Mask</b> your idols, <b>Mask</b> your avatar, <b>Mask</b> your president. 
      </p>
    </div>
    <div class="images">
      <div class="card"></div>
      <div class="card"></div>
      <div class="card"></div>
      <div class="card"></div>
    </div>
</div>
<div class="faq-section">
    <?php get_template_part('template/content/home-page', 'faq'); ?>
</div>

<div class="news-section">
    <div class="body">
      <h2>News about us</h2>
      <div class="logos">
        <a href="https://www.coindesk.com/mask-network-twitter-encrypted-messages-hashkey-funding-round" style="margin-right: 20px;">
          <img src="<?php echo get_template_directory_uri(); ?>/img/news/coindesk.png" height="45px">
        </a>
        <a href="https://decrypt.co/32298/maskbook-a-chinese-dev-builds-a-web3-trojan-horse-on-twitter-and-facebook" style="display: flex; align-items: center; margin-right: 20px;">
          <img src="<?php echo get_template_directory_uri(); ?>/img/news/decrypt-mark-100.png" height="50px">
          <img src="<?php echo get_template_directory_uri(); ?>/img/news/decrypt-word-300.png" height="30px" style="margin-left: 15px; transform: translateY(2px);">
        </a>      
        <a href="https://www.theblockcrypto.com/genesis/79395/defi-digest-mask-network-and-marqet">
          <img src="<?php echo get_template_directory_uri(); ?>/img/news/block.png" height="50px">
        </a>        
        <a href="https://cointelegraph.com/news/you-can-now-trade-on-uniswap-without-leaving-twitter">
          <img src="<?php echo get_template_directory_uri(); ?>/img/news/cointelegraph.png" height="50px">
        </a>      
      </div>
    </div>
</div>

<div class="partners-section">
    <div class="body">
      <h2>Partners and supporters</h2>
      <div class="logos">
        <a title="arweave" href="https://www.arweave.org/" target="_blank" rel="noopener noreferrer">arweave</a>
        <a title="ChainIDE" href="https://chainide.com/" target="_blank" rel="noopener noreferrer">ChinaIDE</a>
        <a title="gun">gun</a>
        <a title="maker" href="https://makerdao.com/" target="_blank" rel="noopener noreferrer">Maker</a>
        <a title="web3bootcamp">web3.0 bootcamp</a>
      </div>
      <div class="logos">
        <a title="okb">OKB</a>
        <a title="HashKey" href="https://www.hashkey.com/" target="_blank" rel="noopener noreferrer">HashKey</a>
        <a title="Gitcoin" href="http://gitcoin.co/" target="_blank" rel="noopener noreferrer">Gitcoin</a>
        <a title="alameda" href="https://www.alameda-research.com/" target="_blank" rel="noopener noreferrer">alameda</a>
        <a title="platon">platon</a>        
      </div>
    </div>
</div>

  <section class="alicebob-section">
    <div class="body">
      <div class="top">
        <div class="line"></div>
      </div>
      <i class="text">
        Alice encrypts cleartext (M) with a random AES key (K) to get ciphertext (CT) and then securely shares K via ECIES over SECP256K1 with Bob using Bob's public key (K.Bob). Alice publishes CT on Facebook and synchronizees K.Bob over GUN. Bob can then retrieve K to decrypt M.
      </i>
      <div class="bottom">
        <div class="line"></div>
      </div>
    </div>
  </section>