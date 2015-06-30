<div class="wrap">
<?php screen_icon();
      $domain_name =  preg_replace('/^www\./','',$_SERVER['SERVER_NAME']); ?>
  <h2>Mobile Detect</h2>
  <div id="poststuff">
    <div id="post-body" class="metabox-holder columns-2">
      <div id="post-body-content">
  <form action="options.php" method="post" id="<?php echo $aFmobdtctID; ?>_options_form" name="<?php echo $aFmobdtctID; ?>_options_form">
<?php settings_fields($aFmobdtctID.'_options'); ?>
      <ul>
        <li>
          <input class="aFswitch" type="checkbox" name="aFmobdtct_redirect" id="aFmobdtct_redirect" value="1" <?php checked( '1', get_option('aFmobdtct_redirect')); ?> />
          <label class="aFswitch" for="aFmobdtct_redirect" ><strong>Mobile Redirect:</strong> <span><b>ON</b><b style="display:none;">OFF</b></span></label>
        </li>
      </ul>
      <p>
        <label for="the_mobile_site_uri" ><span class="dashicons dashicons-smartphone"></span> <strong>Mobile Website URL:</strong></label><br />
        <input id="the_mobile_site_uri" class="regular-text" type="text" name="the_mobile_site_uri" value="<?php
        if (!get_option('the_mobile_site_uri')){ echo 'http://'; }
        else { esc_attr_e( get_option('the_mobile_site_uri') ); }
        ?>" />
      </p>
      <p>
        <label for="non_mobile_site_uri" ><span class="dashicons dashicons-desktop"></span> <strong>Desktop Website URI:</strong></label><br />
        http(s)://<input id="non_mobile_site_uri" class="all-options" type="text" name="non_mobile_site_uri" value="<?php
        if (!get_option('non_mobile_site_uri')){ echo $domain_name; }
        else { esc_attr_e( get_option('non_mobile_site_uri') ); }
        ?>" />/
      </p>
      <ul>
        <li>
          <input class="aFswitch aFpre" type="checkbox" name="aFmobdtct_front" id="aFmobdtct_front" value="false" <?php checked( 'false', get_option('aFmobdtct_front')); ?> />
          <label class="aFswitch aFpre" for="aFmobdtct_front" ><span><b style="display:none;">DO</b><b>DON'T</b></span> <strong><span class="aFup">r</span>edirect the Front page</strong> (static home page)</label>
        </li>
        <li>
          <input class="aFswitch aFpre" type="checkbox" name="aFmobdtct_page" id="aFmobdtct_page" value="false" <?php checked( 'false', get_option('aFmobdtct_page')); ?> />
          <label class="aFswitch aFpre" for="aFmobdtct_page" ><span><b style="display:none;">DO</b><b>DON'T</b></span> <strong><span class="aFup">r</span>edirect Pages</strong></label>
        </li>
        <li>
          <input class="aFswitch aFpre" type="checkbox" name="aFmobdtct_home" id="aFmobdtct_home" value="false" <?php checked( 'false', get_option('aFmobdtct_home')); ?> />
          <label class="aFswitch aFpre" for="aFmobdtct_home" ><span><b style="display:none;">DO</b><b>DON'T</b></span> <strong><span class="aFup">r</span>edirect the Home page</strong> (the blog posts page)</label>
        </li>
        <li>
          <input class="aFswitch aFpre" type="checkbox" name="aFmobdtct_single" id="aFmobdtct_single" value="false" <?php checked( 'false', get_option('aFmobdtct_single')); ?> />
          <label class="aFswitch aFpre" for="aFmobdtct_single" ><span><b style="display:none;">DO</b><b>DON'T</b></span> <strong><span class="aFup">r</span>edirect Posts</strong></label>
        </li>
        <li>
          <input class="aFswitch aFpre" type="checkbox" name="aFmobdtct_attachment" id="aFmobdtct_attachment" value="false" <?php checked( 'false', get_option('aFmobdtct_attachment')); ?> />
          <label class="aFswitch aFpre" for="aFmobdtct_attachment" ><span><b style="display:none;">DO</b><b>DON'T</b></span> <strong><span class="aFup">r</span>edirect Attachments</strong></label>
        </li>
        <li>
          <input class="aFswitch aFpre" type="checkbox" name="aFmobdtct_author" id="aFmobdtct_author" value="false" <?php checked( 'false', get_option('aFmobdtct_author')); ?> />
          <label class="aFswitch aFpre" for="aFmobdtct_author" ><span><b style="display:none;">DO</b><b>DON'T</b></span> <strong><span class="aFup">r</span>edirect Authors</strong></label>
        </li>
        <li>
          <input class="aFswitch aFpre" type="checkbox" name="aFmobdtct_category" id="aFmobdtct_category" value="false" <?php checked( 'false', get_option('aFmobdtct_category')); ?> />
          <label class="aFswitch aFpre" for="aFmobdtct_category" ><span><b style="display:none;">DO</b><b>DON'T</b></span> <strong><span class="aFup">r</span>edirect Categories</strong></label>
        </li>
        <li>
          <input class="aFswitch aFpre" type="checkbox" name="aFmobdtct_date" id="aFmobdtct_date" value="false" <?php checked( 'false', get_option('aFmobdtct_date')); ?> />
          <label class="aFswitch aFpre" for="aFmobdtct_date" ><span><b style="display:none;">DO</b><b>DON'T</b></span> <strong><span class="aFup">r</span>edirect Dates</strong></label>
        </li>
        <li>
          <input class="aFswitch aFpre" type="checkbox" name="aFmobdtct_tag" id="aFmobdtct_tag" value="false" <?php checked( 'false', get_option('aFmobdtct_tag')); ?> />
          <label class="aFswitch aFpre" for="aFmobdtct_tag" ><span><b style="display:none;">DO</b><b>DON'T</b></span> <strong><span class="aFup">r</span>edirect Tags</strong></label>
        </li>
        <li>
          <input class="aFswitch aFpre" type="checkbox" name="aFmobdtct_search" id="aFmobdtct_search" value="false" <?php checked( 'false', get_option('aFmobdtct_search')); ?> />
          <label class="aFswitch aFpre" for="aFmobdtct_search" ><span><b style="display:none;">DO</b><b>DON'T</b></span> <strong><span class="aFup">r</span>edirect search results</strong></label>
        </li>
      </ul>
      <p><strong>Mobile Website Link Shortcode:</strong><br />
      <span class="shortcode">[mobilesitelink text="Override" class="override" page="override"]</span><br />
      <span class="shortcode">[mobilesitebutton text="Override" class="override" page="override"]</span><br />
      <span class="description">(mobilesitebutton only appears on mobile devices)</span></p>
<?php submit_button(); ?>
      <p class="description"><strong>Note:</strong> This version of AddFunc Mobile Detect does not fully support subdomains in the Desktop Website URI field. This field is used to set the cookie for your desktop website, which tells it whether to redirect the device or not. However, you can still use a website that resides on a subdomain. To do this, omit all characters that come before the first period, but leave the period there (example: .your-website.com). Just be aware that this will set the cookie for all subdomains pertaining to the root domain name (so in our example, the cookie would be set for all of these: m.your-website.com, www.your-website.com, other.your-website.com, even-unregistered-subdomains.your-website.com, etc.).</p>
  </form>
      </div> <!-- post-body-content -->
      <!-- sidebar -->
      <div id="postbox-container-1" class="postbox-container">
        <h2>Support Tickets</h2>
        <p>If you need custom support for this plugin (AddFunc Mobile Detect) or any other AddFunc plugin, you can purchase help with a support ticket below. Support tickets are responded to within 24 hours, but we answer them as soon as possible.</p>
        <p><strong>How it works</strong></p>
        <ol>
          <li>Purchase a support ticket below</li>
          <li>I contact you as soon as I can (no less than 24 hours) and help resolve your issue</li>
          <li>That's it!</li>
        </ol>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="2ALABGHC83M4W">
          <table>
            <tr>
              <td><input type="hidden" name="on0" value="Name your ticket">Name your ticket</td>
            </tr>
            <tr>
              <td><input type="text" name="os0" maxlength="200"></td>
            </tr>
            <tr>
              <td><input type="hidden" name="on1" value="Best way to contact you">Best way to contact you</td>
            </tr>
            <tr>
              <td><input type="text" name="os1" maxlength="200"></td>
            </tr>
          </table>
          <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/buy-logo-small.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
        <p><strong>Note</strong>: This is for&nbsp;<em>custom</em>&nbsp;needs for help, not problems with the plugin, or instructions that should already be explained in the description. If you feel there are important details omitted from the <a href="http://wordpress.org/plugins/addfunc-mobile-detect/" target="_blank">Description</a>, <a href="http://wordpress.org/plugins/addfunc-mobile-detect/installation/" target="_blank">Installation</a> steps, etc. of the plugin, please report them in the <a href="http://wordpress.org/support/plugin/addfunc-mobile-detect" target="_blank">Support forum</a>. Thank you!</p>
      </div> <!-- #postbox-container-1 .postbox-container -->
    </div> <!-- #post-body .metabox-holder .columns-2 -->
    <br class="clear">
  </div> <!-- #poststuff -->
</div>