<?php /* The footer for our theme.*/ ?>
</div><!--//content-->

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<div class="push">
</div>
</div><!--#wrapper-->
<div id="menu"><?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used.  */ ?>
<?php wp_nav_menu( array( 'container_class' => 'menu-footer', 'theme_location' => 'primary' ) ); ?></div>
<div id="footer">
<?php wp_footer();?>

<p class="credits">yazıların ve ses kayıtlarının tüm hakları saygıdeğer sahiplerine veya temsilcilerine, internet sayfasının hakları ise <a href="http://www.mefhum.org">MEFHUM.ORG</a>'a aittir.<br>

<!-- 

Dünyanın en güzel kadını oydu
Saçlarını tarasa baştan başa rumeli
Otursa ama hiç oturmaz ki
Kan kadını rüzgardı atların
Hep andım ne yaşanır olduğunu

En çok neresi mi ağzıydı elbet
Bütün duyarlıklara ayarlı
Öpüşlerin türlüsünden elhamra
Sınırsız denizinde çarşafların
Bir gider bir gelirdi işlek ağzı

Ah şimdi benim gözlerim
Bir ağlamaktı tutturmuş gidiyor
Bir kadın gömleği üstümde
Günün maviliği ondan
Gecenin horozu ondan

-->
    
<p class="credits"><i>yirmi dokuz ağustos iki bin on altı'dan beri <!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=11182066; 
var sc_invisible=0; 
var sc_security="2253ce3b"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="shopify traffic
stats" href="http://statcounter.com/shopify/"
target="_blank"><img class="statcounter"
src="//c.statcounter.com/11182066/0/2253ce3b/0/"
alt="Stats"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide --> ziyaret</i>

</div><!--/footer-->
</body>
</html>