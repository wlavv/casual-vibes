<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__3b739f42b380c1ec796761caf695b502 */
class __TwigTemplate_95dc7f587a9fcfe93b8238f82cb7384d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Maintenance • Casual Vibes</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminMaintenance';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'PT';
    var _PS_VERSION_ = '8.2.3';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '45d4fa28deb85bbc1f4d994d219df4aa';
    var currentIndex = 'index.php?controller=AdminMaintenance';
    var employee_token = 'a74853bcbdc079daffda005fc191453d';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/admin/index.php/improve/modules/manage?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8';
    var admin_notification_get_link = '/admin/index.php/common/notifications?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8';
    var admin_notification_push_link = adminNotificationPushLink = '/admin/index.php/common/notifications/ack?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </sc";
        // line 44
        echo "ript>



<link
      rel=\"preload\"
      href=\"/admin/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascr";
        // line 73
        echo "ipt\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.2.3\"></script>
<script type=\"text/javascript\" src=\"/admin/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.2.3\"></script>
<script type=\"text/javascript\" src=\"/admin/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>

  

";
        // line 83
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminmaintenance\"
  data-base-url=\"/admin/index.php\"  data-token=\"AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://casualvibes.local/admin/index.php?controller=AdminDashboard&amp;token=93b8de9ca1ee4cff0020d5c8eb5bb043\"></a>
      <span id=\"shop_version\">8.2.3</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://casualvibes.local/admin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7971d2b55419b7699d8baf0f08f64907\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://casualvibes.local/admin/index.php/improve/modules/manage?token=68ce69387042d23900c1ace762a19c58\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://casualvibes.local/admin/index.php/sell/catalog/categories/new?token=68ce69387042d23900c1ace762a19c58\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://casualvibes.local/admin/index.php/sell/catalog/products-v2/create?token=68ce69387042d23900c1ace762a19c58\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         ";
        // line 121
        echo "href=\"http://casualvibes.local/admin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=df6c13ee0c370c14d0ba73f63a9b9aab\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://casualvibes.local/admin/index.php/sell/orders?token=68ce69387042d23900c1ace762a19c58\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"158\"
        data-icon=\"icon-AdminParentPreferences\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/maintenance\"
        data-post-link=\"http://casualvibes.local/admin/index.php?controller=AdminQuickAccesses&token=7f41a31f93a590d86642edd074b63f5a\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Maintenance - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://casualvibes.local/admin/index.php?controller=AdminQuickAccesses&token=7f41a31f93a590d86642edd074b63f5a\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin/index.php?controller=AdminSearch&amp;token=15057c11805f2ad6795e071e99459d34\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product refe";
        // line 160
        echo "rence, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primar";
        // line 176
        echo "y\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://casualvibes.local/admin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7971d2b55419b7699d8baf0f08f64907\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://casualvibes.local/admin/index.php/improve/modules/manage?token=68ce69387042d23900c1ace762a19c58\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://casualvibes.local/admin/index.php/sell/catalog/categories/new?token=68ce69387042d23900c1ace762a19c58\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://casualvibes.local/admin/index.php/sell/catalog/products-v2/create?token=68ce69387042d23900c1ace762a19c58\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://casualvibes.local/admin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=df6c13ee0c370c14d0ba73f63a9b9aab\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://casualvibes.local/admin/index.php/sell/orders?token=68ce69387042d23900c1ace762a19c58\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropd";
        // line 219
        echo "own-item js-quick-link\"
      href=\"#\"
      data-rand=\"129\"
      data-icon=\"icon-AdminParentPreferences\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/maintenance\"
      data-post-link=\"http://casualvibes.local/admin/index.php?controller=AdminQuickAccesses&token=7f41a31f93a590d86642edd074b63f5a\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Maintenance - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://casualvibes.local/admin/index.php?controller=AdminQuickAccesses&token=7f41a31f93a590d86642edd074b63f5a\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Your store is in maintenance mode.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Your visitors and customers cannot access your store while in maintenance mode.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"/admin/index.php/configure/shop/maintenance/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\"
          >
            <i class=\"";
        // line 264
        echo "material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Maintenance mode</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://casualvibes.local/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
        ";
        // line 318
        echo "      data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://casualvibes.local/admin/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=fca6aa0eb01dfdded1bfddfea9b10724\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_c";
        // line 365
        echo "ompany_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://casualvibes.local/img/pr/default.jpg\" alt=\"Bruno\" /></span>
        <span class=\"employee_profile\">Welcome back Bruno</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin/index.php/configure/advanced/employees/1/edit?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://casualvibes.local/admin/index.php?controller=AdminLogin&amp;logout=1&amp;token=242b3bf22924d96de7a9d93b05c2a75d\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin/index.php/configure/advanced/employees/toggle-navigation?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
   ";
        // line 414
        echo " <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://casualvibes.local/admin/index.php?controller=AdminDashboard&amp;token=93b8de9ca1ee4cff0020d5c8eb5bb043\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.3</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://casualvibes.local/admin/index.php?controller=AdminDashboard&amp;token=93b8de9ca1ee4cff0020d5c8eb5bb043\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin/index.php/sell/orders/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-colla";
        // line 457
        echo "pse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin/index.php/sell/orders/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin/index.php/sell/orders/invoices/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin/index.php/sell/orders/credit-slips/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin/index.php/sell/orders/delivery-slips/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Delivery Slips
                                </a>
                              </li>
";
        // line 489
        echo "
                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://casualvibes.local/admin/index.php?controller=AdminCarts&amp;token=fca6aa0eb01dfdded1bfddfea9b10724\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin/index.php/sell/catalog/products?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin/index.php/sell/catalog/products?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Products
                    ";
        // line 520
        echo "            </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin/index.php/sell/catalog/categories?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin/index.php/sell/catalog/monitoring/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://casualvibes.local/admin/index.php?controller=AdminAttributesGroups&amp;token=1cb943d9441cd67bfbb60d7070cda863\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin/index.php/sell/catalog/bran";
        // line 551
        echo "ds/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin/index.php/sell/attachments/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://casualvibes.local/admin/index.php?controller=AdminCartRules&amp;token=df6c13ee0c370c14d0ba73f63a9b9aab\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin/index.php/sell/stocks/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=";
        // line 585
        echo "\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin/index.php/sell/customers/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin/index.php/sell/customers/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin/index.php/sell/addresses/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                 ";
        // line 615
        echo " 
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://casualvibes.local/admin/index.php?controller=AdminCustomerThreads&amp;token=263fb376f237e1dce10941795d371429\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://casualvibes.local/admin/index.php?controller=AdminCustomerThreads&amp;token=263fb376f237e1dce10941795d371429\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin/index.php/sell/customer-service/order-messages/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                           ";
        // line 645
        echo "                                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://casualvibes.local/admin/index.php?controller=AdminReturn&amp;token=a69e8bd7538b9098b34ff3a72726996e\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://casualvibes.local/admin/index.php?controller=AdminStats&amp;token=7971d2b55419b7699d8baf0f08f64907\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminP";
        // line 684
        echo "arentModulesSf\">
                    <a href=\"/admin/index.php/improve/modules/manage?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin/index.php/improve/modules/manage?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin/index.php/improve/design/themes/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-ic";
        // line 715
        echo "ons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminThemes\">
                                <a href=\"/admin/index.php/improve/design/themes/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin/index.php/improve/design/mail_theme/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin/index.php/improve/design/cms-pages/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                    ";
        // line 746
        echo "        
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin/index.php/improve/design/modules/positions/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://casualvibes.local/admin/index.php?controller=AdminImages&amp;token=79bd1d19ff50eb229da3627b5efcc74b\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin/index.php/modules/link-widget/list?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://casualvibes.local/admin/index.php?controller=AdminCarriers&amp;token=fd08899a5331f4261af63722b5f2ff7f\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_";
        // line 776
        echo "shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://casualvibes.local/admin/index.php?controller=AdminCarriers&amp;token=fd08899a5331f4261af63722b5f2ff7f\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin/index.php/improve/shipping/preferences/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin/index.php/improve/payment/payment_methods?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKy";
        // line 808
        echo "gXsgsdGDMLG5C8\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin/index.php/improve/payment/payment_methods?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin/index.php/improve/payment/preferences?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a";
        // line 841
        echo " href=\"/admin/index.php/improve/international/localization/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin/index.php/improve/international/localization/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin/index.php/improve/international/zones/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
       ";
        // line 871
        echo "                         <a href=\"/admin/index.php/improve/international/taxes/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin/index.php/improve/international/translations/settings?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin/index.php/configure/shop/preferences/preferences?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                ";
        // line 907
        echo "                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin/index.php/configure/shop/preferences/preferences?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin/index.php/configure/shop/order-preferences/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin/index.php/configure/shop/product-preferences/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-";
        // line 937
        echo "leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin/index.php/configure/shop/customer-preferences/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin/index.php/configure/shop/contacts/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin/index.php/configure/shop/seo-urls/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://casualvibes.local/admin/index.php?controller=AdminSearchConf&amp;token=5769ba422ebfda0eb9b3d1b4c091b916\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                             ";
        // line 967
        echo "           </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin/index.php/configure/advanced/system-information/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin/index.php/configure/advanced/system-information/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin/index.php/configure/advanced/performance/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Performance
                                </a>
  ";
        // line 997
        echo "                            </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin/index.php/configure/advanced/administration/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin/index.php/configure/advanced/emails/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin/index.php/configure/advanced/import/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin/index.php/configure/advanced/employees/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8";
        // line 1027
        echo "\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin/index.php/configure/advanced/sql-requests/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin/index.php/configure/advanced/logs/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin/index.php/configure/advanced/webservice-keys/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                  ";
        // line 1058
        echo "            <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin/index.php/configure/advanced/feature-flags/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin/index.php/configure/advanced/security/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">General</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin/index.php/configure/shop/maintenance/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" aria-current=\"page\">Maintenance</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Maintenance          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
    ";
        // line 1112
        echo "               data-target=\"#right-sidebar\"
                   data-url=\"/admin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminMaintenance%253Fversion%253D8.2.3%2526country%253Den/Help?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li class=\"nav-item\">
                    <a href=\"/admin/index.php/configure/shop/preferences/preferences?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" id=\"subtab-AdminPreferences\" class=\"nav-link tab \" data-submenu=\"73\">
                      General
                      <span class=\"notification-container\">
                        <span class=";
        // line 1132
        echo "\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin/index.php/configure/shop/maintenance/?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\" id=\"subtab-AdminMaintenance\" class=\"nav-link tab active current\" data-submenu=\"74\">
                      Maintenance
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminMaintenance%253Fversion%253D8.2.3%2526country%253Den/Help?_token=AdUg2Voc5sbewPGmL9gQ9wRbdPEKygXsgsdGDMLG5C8\"
            >
              Help
           ";
        // line 1162
        echo " </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1180
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://casualvibes.local/admin/index.php?controller=AdminDashboard&amp;token=93b8de9ca1ee4cff0020d5c8eb5bb043\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1214
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 83
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1180
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1214
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__3b739f42b380c1ec796761caf695b502";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1379 => 1214,  1358 => 1180,  1347 => 83,  1338 => 1214,  1298 => 1180,  1278 => 1162,  1246 => 1132,  1224 => 1112,  1168 => 1058,  1135 => 1027,  1103 => 997,  1071 => 967,  1039 => 937,  1007 => 907,  969 => 871,  937 => 841,  902 => 808,  868 => 776,  836 => 746,  803 => 715,  770 => 684,  729 => 645,  697 => 615,  665 => 585,  629 => 551,  596 => 520,  563 => 489,  529 => 457,  484 => 414,  433 => 365,  384 => 318,  328 => 264,  281 => 219,  236 => 176,  218 => 160,  177 => 121,  134 => 83,  122 => 73,  91 => 44,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3b739f42b380c1ec796761caf695b502", "");
    }
}
