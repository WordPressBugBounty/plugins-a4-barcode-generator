=== Print Labels with Barcodes. Create price tags, product labels, order labels for WooCommerce===
Contributors: UkrSolution <https://profiles.wordpress.org/ukrsolution>
Tags: barcode, label, print, upc, ean
Requires at least: 4.0.1 
Tested up to: 6.5
Stable tag: trunk
Requires PHP: 5.6
License: GPLv2 or later 
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Generate & print barcode labels for WooCommerce products and orders. Put various data on labels like price, SKU, name, attributes, customer data, etc

== Core features ==

**✔ Generate and print barcode labels for products & orders**
**✔ Printers support: A4, Letter, P4 & label/thermal printers**
**✔ Labels can contain: barcode, name, SKU, price, attributes, etc**

https://youtu.be/Am5aDb8DorQ


When your store is growing it could be pretty difficult to manage inventory and orders effectively.  Try to improve your workflow by printing barcode labels for your products. 
Printed labels can contain various product information which helps to understand the basic details about the product.
And the barcode (on the label) allows to get all the product information from WooCommerce using your POS system.
In combination with our [Barcode Scanner](https://wordpress.org/plugins/barcode-scanner-lite-pos-to-manage-products-inventory-and-orders/) plugin, you can scan the barcode and get all the basic product details to manage inventory as fast as possible. And the mobile app allows to scan the barcode and manage your inventory right from the smartphone.



=== All Features ===
* Labels can contain: SKU, price, name, attributes, custom fields and any other fields.
* Print barcode labels for your existing products, purchased items or create & print labels manualy.
* WooCommerce if fully supported along with product variations, attributes, custom fields, etc.
* Printers supported: A4, Letter, P4; Roll/Thermal label printers like DYMO, Zebra, Brother and other models.
* Barcode labels can be read by scanners or iPhone/Android smartphones
* Full supports of "Contact Form 7" and "Flamingo" form fields.
* Possibility of the label template customization.
* Supported barcode types: CODE128, CODE39, QRCode, DataMatrix, GTIN, GS1 family (UPC-A, UPC-E, EAN-13, EAN-8)

**Customized & personalized labels:**

"Barcode Label Printing" plugin allows to print labels with customized design to fit your shop brand. 
You can print labels with logo, texts, attributes, custom fields, and any other design elements (requires development of the label HTML template)

Read more on [this page](https://www.ukrsolution.com/Joomla/A4-BarCode-Generator-For-Wordpress) for more information.

**Please note**: This is a Demo version of "Barcode Label Printing" plugin. It's free to review all features of this plugin except printing itself.
To get a full version you'll need to buy a license.
[Get Full Version Here](https://www.ukrsolution.com/Joomla/A4-BarCode-Generator-For-Wordpress)  


== Possible use cases ==

### Printing barcode labels for existing products

Plugin allows to create labels for existing products. 
You can print labels (with or without the barcode) in 4 different ways:
* "All Products" page - you can check/select a few products and then press "Product Label" button at the top of the product list.
* "All products" page - create label for 1 specific product by clicking on "Label" icon near each product in the product list.
* "Product edit" page - you will find button "Product Label" above product description for the current product.
* "Product edit" page - you will find buttons "Product Label" for each variation in the "Variations" section.

### Printing barcode labels for purchased items

Use this plugin to create labels for purchased items in the order.
There 3 ways to create such labels:
* "Orders" page - check/select one or a few orders and press "Product Label" button at the top of he order list.
* "Inner Order" page - Open one specific order and press "Product Label" button on the right hand side (in a widgets section).
* "Inner Order" page - Each purchased item has a "Select" checkbox which you can mark and then press "Create Product Labels" button below the purchased items.

### Scanning the barcodes

The barcodes on the labels can be scanned by various software. You may already have some barcode scanning plugin (or POS system) which will allow you to scan and manage the products/orders.
However, if you don't have such plugin yet, we recomend you to use our lite [Barcode Scanner](https://wordpress.org/plugins/barcode-scanner-lite-pos-to-manage-products-inventory-and-orders/) plugin for fast and effective inventory/order managment. With this plugin you simply scan the barcode and associated product or order will be shown to you in a few seconds. And the iOS/Android app will allow you to do so from the smartphone.

== How to: ==

###  Barcode labels Manually:

* Click at "Barcode Printer" -> "Open Preview" menu - popup will appear.
* Fill in "Barcode" field with product SKU or any other code as this field is used for barcode generating.
* You could also fill optional fields "Line1" - "Line4" for adding any additional information.
* Select "Type" of barcode - read more about barcode types [here](https://www.ukrsolution.com/Joomla/A4-BarCode-Generator-For-Wordpress#details).
* Click "Add to Page" button and new label will appear at the preview.
* You can add any amount of barcodes/pages before printing them.
* Press "print labels" button

### Import Products:

* Go to WooCommerce "Product List" page.
* Select/check products which you would like to import.
* Click on "Generate Barcodes" button and popup will open with similar settings like when you created barcodes manually.
* Match fields "Barcode", "Line1" - "Line4" with proper columns and select "Type" of barcode and then click "Generate" button.
* You can repeat above actions many times and then print all added barcodes by clicking "Print" button.
* Press "print labels" button

### Import Categories

* Go to WooCommerce Categories page.
* Select categories you would like to import and press "Generate Barcodes" button.
* Match fields "Barcode", "Line1" - "Line4" with proper columns and select "Type" of barcode and then click "Generate" button.
* Note: It might be a not good idea to try to import thousends of products at the same time.
* Press "print labels" button

### Import Orders

* Go to WooCommerce Orders page.
* Select orders you would like to import and one of the buttons: "Import Orders" or "Import Products".
* "Import Orders" button will create barcode label for a whole order.
* "Import Products" button will create barcode for each product in the order.
* Match fields "Barcode", "Line1" - "Line4" with proper columns and select "Type" of barcode and then click "Generate".
* Press "print labels" button

### Import forms from "Contact Form 7" & "Flamingo"

* Go to "Flamingo"->"Inbound Messages"  page.
* Select forms you would like to import and press "Generate Barcode" button.
* Match fields "Barcode", "Line1" - "Line4" with proper columns and select "Type" of barcode and then click "Generate".
* Press "print labels" button

### How to Add new label sheet:

* Click in menu "Open Preview"
* Click on "Labels sheet" dropdown and select "+ Add new" at the bottom.
* In popup "New label sheet" enter all required sizes. You can find all these sizes on label sheet box.
* Click "Add Format".


More information about bar-code plugin fing here:

* [Barcode Labels Printing](https://www.ukrsolution.com/Joomla/A4-BarCode-Generator-For-Wordpress)
* [FAQ](https://www.ukrsolution.com/Joomla/A4-BarCode-Generator-For-Wordpress)
* [User Manual](https://www.ukrsolution.com/Joomla/A4-BarCode-Generator-For-Wordpress)

== Installation ==

### Installing Demo version
* Go to WordPress admin -> Plugins menu.
* Add New-> search for plugin by entering plugin name “Barcode Generator” -> choose plugin  “Barcode Generator” -> install now.
* Activate the plugin.

### Installing Full version
* Download the plugin (zip file) to your PC or Laptop.
* Go to WordPress Admin -> Plugins menu.
* Add New->Upload->browse the zipped plugin.
* Upload and Activate the plugin.

== Frequently Asked Questions == 

= I have label sheets and I am not sure if this plugin can support it. =

By default bar-code generator contains the most popular A4 label sheets that allows to print 12, 14, 16, 21, 24, 40, 44, 56, 65, 120, 189, 230 or 324 barcodes per page.
If you have label sheet with different amount of labels or with different sizes - you can easily create your own custom format - just specify sizes of labels, margins, label gaps and new format will be ready for work.

= How to put attributes or custom fields on bar-code label ? =

By default plugin allows to display on barcode 2 attributes/custom fields. For this you need to match "Text1" and "Text2" fields on "Import" popup with specific attribute or custom field. To use 3 or more attributes/custom fields on barcode you will have to create new barcode template and by using shortcodes like **[attr=gcolor]** or **[cf=_regular_price]** specify where they should be placed. The value for shortcode might look different, like "tshirt_size", "upc_code" or "my_custom_field". Usually name of custom field or attribute is specified in plugin/place where it was created.

= How do I know that my printer supports margin-free printing ? =

Before printing it's very important to get to know your printer a little bit better, especially we need to know if printer can print without page margins.

The right way to do it is to read technical documentation about your printer (or find it in google) but if you lost documentation or can't find in google there is another way. 

Print [this PDF page](https://www.ukrsolution.com/pdf/Barcodes/Check-Printer-Margins.pdf) and compare if it looks the same as on PDF. If page border doesn't look the same - your printer might not suport border-free printing or you didn't check this option in print settings popup.

= My printer doesn't support margin-free printing, what's next ? =

It's ok, actually most of printers can't do it. You just need to use label sheets with page margins. 

[Here is example](https://www.ukrsolution.com/pdf/Barcodes/label-sheet-40-margins.pdf) of label sheet (40 labels per page) with page margins.

= What types of bar-codes do you support ? =

Our **Bar-code Generator** supports most popular types of codes: **CODE128**, **UPC**, **EAN**, **EAN8**, **CODE39**, **EAN13**, **QRCode** and **DataMatrix**.

= Can I save/download barcodes on my MAC or PC? =

There are 2 ways: 
1. You can save each code as PNG image.
2. You can save all pages as PDF document, so you will be able to print them later.

= How much barcodes I can  put on page ? =

As much as you need :)
Our barcode generator contains buil-in set of the most popular A4 label sheets which allows to add 12, 14, 16, 21, 24, 56 or 65 barcodes per page.
And you can create any amount of your own label sheet formats.

= How can I generate barcodes for all products in particular category or categories ? =

Please follow these steps:
1. Click at "Barcode Generator" -> "Import categories" menu.
2. Check categories for which you'd like to create barcodes, specify barcode type and fields you'd like to use for barcode generation.
3. Click "Import" button.
 

= Can I add  product name on barcode ? =

Sure, one barcode can contain and code and product name.

= I have found a bug, how can it be fixed ? =

You need to send email to us and provide us with details:
How to reproduce bug
Screenshots of bug
Best way to describe the problem is to create video (you can use software like Jing)

= Can I add a prefix to a barcode code ? = 

Sure, this option available on the settings page.

= Can I combine values for generating code ?= 

Yes, our plugin supports this option which you can find on the "custom template" page (the [code] value tab).

== Screenshots ==

1. The first start wizard, select your printer/paper type (A4).
2. The first start wizard, select your printer/paper type (Roll or Thermal printer).
3. The first start wizard, select dimension (for Roll or Thermal printer).
4. Create barcodes manually (Roll or Thermal printer).
5. Create barcodes manually (A4).
6. Select products to generate barcodes.
7. Generait QR codes from products (A4 paper).
8. Generait QR codes with product image from products (Roll Thermal Printer).
9. Select WooCommerce Categories to generate barcodes.
10. Generate barcodes from selected categories (Roll Thermal printer).
11. The "Label Templates" page.
12. The "Preview fields" tab on teh template settings page.
13. The "Barcode Value" tab on the template settings page.
14. The Barcode generator settings menu.
15. Example of Roll thermal printer.
16. Example of a4 printer.

== Changelog =

= 3.4.5 - 21 February 2023 =
* Feature: Single label PDF will have the name of the barcode.
* Feature: Added possibility to print variation label right from the "All products" page.
* Improvement: Added German translation
* Improvement: Added more text to the translations
* Improvement: Minor UI improvements
* Bug: Fixed css issue with EAN13 barcode
* Bug: Fixed minor bugs in the label preview


= 3.4.4 - 7 December 2022 =
* Important fix: Fixed printing preview issue for the latest google chrome update
* Bug fix: Fixed product links for the variations
* Feature: Automatic detection of UPC if EAN is selected
* Feature: Added 8 values per label for the Basic plan
* Feature: Added possibility to add user's info to the labels
* Improvement: Added delay for JS building on the print page
* Improvement: Added some text to translations
* Improvement: From now, line-break set to "break words" by default
* Other: Multiple minor bug fixes and UI improvements

= 3.3.17 - 7 February 2022 =
* Added date search filter to the Orders page.

= 3.3.16 - 21 January 2021 =
* Compatibility with woocommerce 6*
* Added support of offline mode.
* Added filters to the orders page.
* Added new shortcodes for orders.

= 3.3.15 - 24 December 2021 =
* Added order "Items Subtotal" shortcode.
* Fixed issue with generation barcodes for Categories.

= 3.3.14 - 14 December 2021 = 
* Added the "afterRender" event for all plans.
* Added 8 lines for the "Match Fields" tab.
* Improvement: Custom fields & plugins sync

= 3.3.13 - 24 November 2021 =
* Added local attributes to dropdown for matching.
* Added possibility to split one field into 2 fields per row.
* Added integration with the next plugins:"EAN for WooCommerce", "Product GTIN (EAN, UPC, ISBN) for WooCommerce", "WooCommerce UPC, EAN, and ISBN", "wePOS – Point Of Sale (POS) for WooCommerce".


= 3.3.12 - 4 October 2021 =
* Improve #8851: Import of local attributes.

= 3.3.11 - 14 September 2021 =
* Feature #8842: Added support PHP8.
* Feature #8830: Added 32 lables for letter.
* Feature #8850: Addded parent shortcode to documentation.
* Feature #8859: Added Price + Tax shortcode to documentation.
* Feature #8829: Added order URL to matching dropdown.
* Feature #8815: Translation for the Russian language.
* Improve #8862; Label settings on the preview.
* Improve #8813: UI.

= 3.3.10 - 4th August 2021 =
* Improve #8784: Added new documentation on the Template Labels page.
* Improve #8784: Loading "matched" fields on profile change
* Bug fix #8784: Fixed issue with product order from an order.
* Bug fix #8764: Fixed issue with space between lines for the basic template.


= 3.3.9 - 12th July 2021 =
* Feature: Added "afterRender" JavaScript Event for each label for Premium plan
* Improve: Move license to separate tab
* Bug: HTML in Barcode

= 3.3.8 - 2nd July 2021 =
* Added option to edit CSS style of adaptive template.

= 3.3.7 - 25th June 2021 =
* Updated Setup Wizard.
* Added possibility easy change barcode position.
* Added default values in the "Matches" popup.
* Renamed buttons & click behavior.
* Updated UI for the "Create Labels" popup.

= 3.3.6 - 16th June 2021 =
* Added Developer API.
* Added JS API.
* Added new label sheet - 30 labels.

= 3.3.5 - 20th May 2021 =
* Add product list to order label.
* Added the "Rotate barcode 90 degree" option to the Label Settings.
* Labels without barcode image.
* Fixed issue with subcategoris.

= 3.3.4 - 13th April 2021 =
* Added the possibility to change the size of the barcode image from the print preview page.
* Added possibility to select a specific product from order to generate barcode.
* Added new field in the dropdown for matching to combine dimensions (length х width х height).
* Added possibility to manage displaying fields' names on the label (e.g Model: We6524Tr / We6524Tr).

= 3.3.3 - 29th March 2021 =
* Added the product description fields for matching.
* Added option to set default profile.
* Added the new short codes in order to display full country name for shipping labels.
[cf=_billing_country_full_name]
[cf=_shipping_country_full_name]

= 3.3.2 - 22th March 2021 = 
* Added the Adaptive template for Shipping labels.
* UI improvements.
* Fixed issue with Letter paper.

= 3.3.1 – 12th March 2021 =
* Added the new label template.

= 3.3.0 – 28th January 2021 = 
* Added Shipping Label.

= 3.2.0 – 27th November 2020 =
* Added Google fonts.
* Added new shortcodes.
* Added caching for 24 hours.
* Resized icons.
* Modified HTML label template for the example № 4 (mm).
* Added the clear cache button for clearing storage and cookies.
* Added functionality changes for plans

= 3.1.8 – 2nd November 2020 =
* Fixed issue with a horizontal gap.

= 3.1.7 – 29th October 2020 =
* Layout changes for Roll Preview.
* Changes in navigation.
* UI changes.

= 3.1.5 – 15th October 2020 =
* Updated HTML code for Example 4 (mm).
* UI and workflow changes (moved a saved profile dropdown at the top).

= 3.1.4 – 7th October 2020 = 
* Added a new custom labels template for EAN-13.
* Added support of orders custom fields.
* Fixed the colored issue with the Yoast SEO plugin.

= 3.1.3 – 23rd September 2020 =
* Fixed issue with fist label for Roll printer.

= 3.1.2 – 21st September 2020 =
* Fixed issue with a default value of type code.

= 3.1.1 - 11th September 2020 =
* Added options for managing preview fields.

= 3.1.0 - 10th September 2020 =
* Added customize font size option.

= 3.0.4 - 2nd September 2020 =
* Added support of GS1 standards for barcode image (EAN 13, UPC A, and UPC).

= 3.0.3 - 1st September 2020 = 
* UI improvements.

= 3.0.2 - 25th Aug 2020 = 
* Added support of the "Contact Form 7" + Flamingo.

= 3.0.0 - 14th Aug 2020 = 
* Added the "Import Orders" button on the WooCommerce orders page in order to generate barcodes for WooCommerce orders.
* Added the "Import Products" button on the WooCommerce orders page in order to generate barcodes from selected orders.
* Added the "Generate Barcodes" button on the products page. 
* Added the "Print Barcode" button on the inner product page. 
* Added the "Print Barcode" button for each variation on the product details page.
* Added the "Generate Barcodes" button on the WooCommerce categories page.
* Added the new shortcode on the label template page - Taxonomy: \[taxonomy=product_tag]. 
* Added the new shortcode on the label template page - Current date: \[date=d M Y]
* Added the "Save Profile" option.
* Added 2 new HTML templates.
* Added the "Preview fields" tab at the "Label Template" page which allows to specify default fields for matching.
* Added start wizard.
* UI improvements.

= 2.14.4 - 14th Jul 2020 = 

= 2.14.1 - 20th, May 2020 = 
* Added message "This browser is not fully supported, please use "Google Chrome" browser to print bar codes. 

= 2.14.0 - 18th, May 2020 = 
* Added possibility to add more then one value from custom fields via comma separator.

= 2.13.0 - 27th, April 2020 =
* Added support of colors for custom label templates.
* UI improvements.

= 2.12.3 - 21th, February 2020 =
* Improvements with default uol settings.
* Improvements for compatibility with the custom website theme.
* Fixed issue with custom fields.

= 2.12.2 - 11th, February 2020 =
* Corrected issue with logo icon

= 2.12.1 - 10th, February 2020 = 
* Corrected issue with label sheet size configuration.

= 2.12.0 - 6th, February 2020 = 
* Added option to specify any prefix for generating barcode.
* Added ability match code value with any Woocommerce custom field (s) for single and variables products.
* Added the "Custom Fields & Attributes" template.
* Added ability to set on the label the "Currency position" which set at WooCommerce general settings.
* Added new shortcodes to the "Custom template" page.
* Added support of "mm" and "inch" values instead of "px" for the "Base padding" field on the custom template page.
* Removed an option for deleting the "Roll Thermal Printer" type from the Paper type list.
* Corrected issue with PHP version 7.4.

= 2.11.6 - 11th, December 2019 = 
* Fixed issue with dialog windows.

= 2.11.5.3 - 25nd, November 2019 = 
* Added support to display price with tax; 
* UI improvements;
* The custom field doesn't work for product attributes - fixed.

= 2.11.5.2 - 18nd, November 2019 =

* Improvements with layout.

= 2.11.5.1 - 12nd, November 2019 = 

* Added ability for output all specified attributes with a custom template;
* Added ability for generating barcodes for products with multiple variations.
* Added ability for generating barcodes for Private Products.

= 2.11.4 - 18th, October 2019 = 
* Fixed issue with updates.

= 2.11.3.2 -8th, October 2019 = 
* Added support of inches.
* Added a switch-mode for printing with Receipt and Roll Printer.
* Fixed cache issue.

= 2.11.3 - 1st, September 2019 = 
* Added possibility creates an empty label.
* Added padding setting.
* Added supports of decimals (inches).
* Fixed issue with move gaps on the top and bottom on the page.
* Fixed issue with displaying zeros. 

= 2.11.2 - 19th, August 2019 = 
* Add support parent product image.
 
= 2.11.1.1 - August 1st, 2019 = 
* Print link wasn't working on some WordPress configurations - corrected.

= 2.11.1 - July 4th, 2019 = 
* Added improvements for a custom template.

= 2.11.0 - July 1st, 2019 = 
* Added possibility add a product image on a barcode label.
* Added custom template with supporting product image.
* UI improvements.
* Roll printer improvements.

= 2.10.0 - June 13th, 2019 =
* Fixed attributes value issue.
* New template added.

= 2.9.0.1 - June 5th, 2019 = 
* Fixed attributes issue.

= 2.9.0 - May 17th, 2019 =
* UI improvements.

= 2.8.0 - April 26th, 2019 = 
* Added support of Custom Templates for Labels.
* Corrected issue with empty folder.
* UI improvements.
* Fixed issue with cache.

= 2.7.0.3 - April 25th, 2019 = 
* Corrected - ajax request with sub-folder.
* Improvements for variations that have stock quantity 0.

= 2.7.0.2 - April 16th, 2019 =
* Corrected Preview Page disappearance.
* Barcode labels sorting stopped working – fixed.
* Major improvements.

= 2.7.0.1 - April 3rd, 2019 =
* JavaScript files now loaded after click at Barcode Generator menu.
* Import Categories popup improvements.
* СODE128 throws error when created out of number - corrected.
* UPC-A validation - corrected.

= 2.7.0 - March 26th, 2019 =
* Added WooCommerce "Attributes" support.
* Added support of WooCommerce "Stock quantity". If enabled amount of created barcodes will be equal as the amount specified in "Stock quantity" field.
* Added other languages support. Now you can add translations for your language.
* Quality of barcodes improved by using SVG instead of images.

= 2.6.0 - March 15th, 2019 =
* Added support of variations to "Selected Items" option.
* Product Link and Admin Product Link added. When creating barcodes you can use Product Links - useful for QRCodes.
* Corrections for Roll Label Printers

= 2.5.0.1 - March 6th, 2019 =
* CODE39 wasn't detected by some barcode scanners - corrected.
* Printing of Barcodes didn't work in Safari - corrected.

= 2.5.0 - March 1st, 2019 =
* Other plugins caused printing issues. Printing proccess has been rewritten to prevent these issues.

= 2.4.0 - January 31st, 2019 =
* Design enhancements

= 2.3.0 - January 28th, 2019 =
* "DataMatrix" barcode type is added.
* "Letter" paper type added into pre-installed list.

= 2.2.3.1 - January 24th, 2019 =
* Corrected issue that some EAN13 codes were detected as invalid.

= 2.2.3 - January 15th, 2019 =
* Text on labels were cut off - corrected.

= 2.2.2.1 - December 21st, 2018 =
* UPC-A validation issue corrected.
* Added error message for websites that use old PHP version (less than PHP 5.6).

= 2.2.2 - December 6th, 2018 =
* Add "X Copies" feature for "Create Manually" popup to create any amount of the same barcode.
* Custom Paper Formats added. You can create any page size you need including support of roll printers.
* Custom Fields support added. Now you can use any custom field to create barcode.
* Import Selected Items popup. Improved error log.
* EAN13 format - improved validations & errors handling.
* Check for the new version is optimized. Now you won't miss new releases.
* Responsive improvements for small devices.
* Correction for Euro prices in "Import Categories" popup.
* When printing user got empty page - fixed.

= 2.2.1 - November 6th, 2018 =
* Speed optimization improved.
* Feature "Static text" added.
* Added option to show/hide "Code" on barcode label for "Import selected items" and "Import Categories" popups.

= 2.2.0.1 - November 2nd, 2018 =
* Price currency hasn't been printed in some cases - corrected.

= 2.2.0 - October 31st, 2018 =
* Error messages improved.
* Сategory hierarchy is displayed.
* Bug Reporter improved.
* Preloader added while categories list is loading, and while new format is being created.
* New version checker is improved.
* Responsive fixes made.
* Import categories fixed.

= 2.1.0.2 - October 24th, 2018 =
* JavaScript errors fixed.
* CSS improvements made.

= 2.1.0.1 - October 22th, 2018 =
* Added hot fixes for php notices.

= 2.1.0 - October 20th, 2018 =
* Access to Barcode Generator added to "Shop Manager" user role. This is one of built-in roles of WooCommerce.
* Added "Bug Reporter" that helps to detect errors.
* "Add to Page" button is disabled till Barcode is generated - prevents adding empty Barcodes to page.
* Preloader in "Import Categories" popup never stops when empty categories selected - fixed.
* Auto-check for a newer version fixed.

= 2.0.0.1 - October 18th, 2018 =
* Fix for servers with allow_url_fopen settings disabled.
* Added fix for "Import Categories" popup when there are many categories.

= 2.0.0 - October 17th, 2018 =
* Created from scratch the core of plugin
* Support of WooCommerce Product Variations added
* "Text" field is added in "Create Manually" popup

= 0.4.18 - August 13th, 2018 =
* Small corrections to layout

= 0.4.16 - August 8th, 2018 =
* Added "Import Categories" feature. Allows to generate barcodes for products in selected categories.
* Added support of 120 barcodes per A4 page
* Redesign

= 0.3.3 - Marth 23th, 2017 =
* Show/Hide barcode text

= 0.2.9 - January 13th, 2016 =
* Added Additional field in Import

= 0.2.8 - November 9th, 2016 =
* Added QRCode

= 0.2.7 - October 31th, 2016 =
* Added new features

= 0.2.6 - September 22nd, 2016 =
* Added new features

= 0.1.6 - September 15th, 2016 =
* Added new features

= 0.1.2 =
* Fist version

== Upgrade Notice ==
* Added new features
