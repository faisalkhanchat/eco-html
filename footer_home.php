<div class="paypal_blk">
    <img src="assets/img/paypal_image.png" class="block-center" alt="">
</div>
  
   <div class="eco--footer eco--pd--100">
    <div class="container">
        <div class="row">            
            <div class="col-sm-6">
                <div class="widget footer_widget">
                   <div class="eco--inner">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#site_wrap">Home</a></li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="https://kb.ultraseedbox.com">Documentation</a></li>
                            <li><a href="https://my.ultraseedbox.com"> Customer Portal  </a></li>
                            <li><a href="https://cp.ultraseedbox.com"> Control Panel    </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="widget footer_widget">
                    <div class="eco--inner">
                        <h4>Important</h4>
                        <ul>
                            <li><a href="refund-policy.php"> REFUND POLICY</a></li>
                            <li><a href="terms-of-service.php">TERMS OF SERVICE</a></li>
                            <li><a href="privacy-policy.php"> PRIVACY POLICY</a></li>
                            <li><a href="sitsitemap.php"> SITEMAP  </a></li>
                            <li><a href="seedboxes.php"> SEEDBOXES    </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyright © 2017, Ultraseedbox. </p>
                    <p>This company is registered legally under the name of SlashN Infotech Pvt. Ltd.</p>
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- end .site_wrap -->
<!--all JavaScript Files-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/slick.min.js"></script>
<script src="assets/js/vendor/magnific.popup.min.js"></script>
<script src="assets/js/vendor/ajaxchimp.min.js"></script>
<script src="assets/js/vendor/sweet.alert.min.js"></script>
<script src="assets/js/vendor/particle.min.js"></script>
<script src="assets/js/particle.config.js"></script>
<script src="assets/js/vendor/slicknav.min.js"></script>
<!--<script src="assets/js/smoothscroll.js"></script>-->
<script src="assets/js/active.js"></script>

<script>
jQuery('.pricing-term span').click(function(){
  var term = jQuery(this).data('term');
  if(term==1){
    jQuery('#go-pricing-table-1194 .term').hide();
  	jQuery('#go-pricing-table-1194 .term.one').show();
  }else if(term==3){
    jQuery('#go-pricing-table-1194 .term').hide();
  	jQuery('#go-pricing-table-1194 .term.three').show();
  }else if(term==6){
    jQuery('#go-pricing-table-1194 .term').hide();
  	jQuery('#go-pricing-table-1194 .term.six').show();
  }else{
    jQuery('#go-pricing-table-1194 .term').hide();
  	jQuery('#go-pricing-table-1194 .term.twelve').show();
  }
});
</script>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://vostrel.cz/so/9652944/scroll.js"></script>
<script>

(function($){
  
    var jump=function(e)
    {
       if (e){
           e.preventDefault();
           var target = $(this).attr("href");
       }else{
           var target = location.hash;
       }

       $('html,body').animate(
       {
           scrollTop: $(target).offset().top
       },1000,function()
       {
           location.hash = target;
       });

    }

    $('html, body').hide()

    $(document).ready(function()
    {
        $('a[href^=#]').bind("click", jump);

        if (location.hash){
            setTimeout(function(){
                $('html, body').scrollTop(0).show()
                jump()
            }, 0);
        }else{
          $('html, body').show()
        }
    });
  
})(jQuery)
</script>
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?48yGhmJ8wcDTi7edNy29HytUpXoUWOJc";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
</body>

</html>