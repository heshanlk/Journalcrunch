<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <?php global $base_url; ?>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>

  </head>

  <body>

    <div id="mainWrapper">

      <!-- Header. -->
      <div id="wrapper">

        <!-- Header. -->
        <div id="header">

          <div id="logo">
            <?php
            // Prepare header
            $site_fields = array();
            if ($site_name) {
              $site_fields[] = check_plain($site_name);
            }
            if ($site_slogan) {
              $site_fields[] = check_plain($site_slogan);
            }
            $site_title = implode(' ', $site_fields);
            if ($site_fields) {
              $site_fields[0] = '<div>' . $site_fields[0] . '</div>';
            }
            $site_html = implode(' ', $site_fields);

            if ($logo || $site_title) {
              print '<a href="' . check_url($front_page) . '" title="' . $site_title . '">';
              if ($logo) {
                print '<img src="' . check_url($logo) . '" alt="' . $site_title . '" />';
              }
              print $site_html . '</a>';
            }
            ?>
          </div>

          <div id="topMenu">

            <?php if (isset($primary_links)) : ?>
            <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
            <?php endif; ?>

            </div>

            <div id="topSearch">
            <?php print $search_box; ?>
            </div>

            <div id="topSocial">

              <ul>
                <li><a class="twitter tip" href="http://twitter.com/heshanlk" title="Follow Us on Twitter!"></a></li>
                <li><a class="facebook" href="http://www.facebook.com/heshanlk" title="Join Us on Facebook!"></a></li>
                <li><a class="rss" title="RSS" href="rss.xml" title="Subcribe to Our RSS Feed"></a></li>
              </ul>

            </div>

            <div style="position: absolute; bottom: -10px; left: 290px; z-index: 100; width: 350px; border: 1px dotted rgb(139, 157, 163); padding: 5px; background: none repeat scroll 0% 0% rgb(238, 238, 238); -moz-border-radius: 4px 4px 4px 4px; text-align: center; font-size: 11px;">
              <a id="switcher" href="/contact">I'm an open source contributor. read more about author</a><br>
                <small><em style="color: rgb(102, 102, 102);">#php #java #drupal #zend #symfony #wurfl</em></small>
            </div>
          </div><!-- EOF: #header -->

          <!-- Content. -->  
          <div id="content">

          <?php
              if ($is_front) {
                print $messages;
                print $tabs;
                print $content;
              } else {
          ?>
                <div id="colLeft">

            <?php print $messages; ?>
            <?php print $tabs; ?>
            <?php print $content; ?>

              </div><!-- EOF: #main -->

              <div id="colRight">

            <?php print $sidebar; ?>

              </div><!-- EOF: #sidebar -->
          <?php } ?>

            </div><!-- EOF: #content -->

          </div><!-- EOF: #wrapper -->

          <!-- Footer -->
          <div id="footer">

            <div id="footerInner">

              <div class="blockFooter">
            <?php print $footer_first; ?>
            </div>

            <div class="blockFooter">
            <?php print $footer_second; ?>
            </div>

            <div class="blockFooter">
            <?php print $footer_third; ?>
            </div>

            <div class="blockFooter">
            <?php print $footer_fourth; ?>
            </div>

            <div id="secondary-links">
            <?php if (isset($secondary_links)) {
            ?><?php print theme('links', $secondary_links, array('class' => 'secondary-links links')) ?><?php } ?>
            </div>

            <div id="footer-message">
            <?php print $footer_message ?>
          </div>

        </div>

      </div>

    </div><!-- EOF: #footer -->

    </div>

  </body>
</html>