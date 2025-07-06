<h1 align="center">Point Of Sale</h1>

<p align="center">
<img src="/README_resource/ER.jpg" alt="ER Diagram">
</p>


## **Key Entities and Their Relationships:**

- **Products:**Central to the system, products have attributes like name, SKU, unit price, and product image. They are linked to Categories (many-to-one) and Brands (many-to-one).
- **Categories:** Organize products and have a category name and description.
- **Brands:** Represent product brands with brand name and description.
- **Sales:** Records customer purchases, including sales date, invoice no, sub total, discount, and net total. A sale consists of multiple Sale_Items.
- **Customers:** Entities who make purchases, with attributes like customer name, email, phone no, and address. Customers "sell to" Sales
- **Sale_Items:**  Details of individual items within a sale, including quantity and discount amount. Each Sale_Item links to a specific Product.
- **Purchase:** Records product acquisitions from suppliers, including purchase date. A purchase consists of multiple Purchase_Items
- **Suppliers:** Entities from whom products are purchased, with attributes like supplier name, email, phone no, and address. Suppliers "has" Purchase records.
- **Purchase_Items:** Details of individual items within a purchase, including cost price, quantity, maximum retail price, and expiry date. Each Purchase_Item links to a specific Product.
- **Inventory_Tracker:** Tracks changes in product inventory, recording created at timestamp, change type, quantity change, and balance after. It links to Products, Purchase items, and Sale items to reflect inventory movements from purchases and sales.

### **Overall System Flow:**
- **Product Catalog:** Organizing products by categories and brands.
- **Sales Management:** Handling customer orders, detailing items sold, and tracking sales totals and discounts.
- **Purchase Management:** Recording product acquisitions from suppliers and tracking purchase details.
- **Inventory Management:** Monitoring product stock levels and changes due to sales and purchases.


### **Requeired**
- **[Composer]()**
- **[Xampp server]()**
- **[code editor]()**
- **[node]()**

#### Clone project
<p>git clone repo link</p> 

#### install composer command
<p>composer install</p>

#### install npm
<p>npm install</p> 

#### copy .env.example and config
##### **before**
<p>DB_CONNECTION=sqlite</p> 
<p># DB_HOST=127.0.0.1</p> 
<p># DB_PORT=3306</p> 
<p># DB_DATABASE=laravel</p> 
<p># DB_USERNAME=root</p> 
<p># DB_PASSWORD=</p>

##### **after**
<p>DB_CONNECTION=mysql</p> 
<p># DB_HOST=127.0.0.1</p> 
<p># DB_PORT=3306</p> 
<p># DB_DATABASE=your_data_base_name_here</p> 
<p># DB_USERNAME=root</p> 
<p># DB_PASSWORD=</p> 


#### set app key
<p>php artisan key:generate</p> 

#### migrate the database
<p>php artisan migrate</p> 

#### run the project
<p>php artisan serve</p>

#### Project structure

Directory structure:
├── .editorconfig
├── .env.example
├── README.md
├── app
│   ├── Http
│   │   ├── Controllers
│   │   │   ├── Auth
│   │   │   │   ├── AuthenticatedSessionController.php
│   │   │   │   ├── ConfirmablePasswordController.php
│   │   │   │   ├── EmailVerificationNotificationController.php
│   │   │   │   ├── EmailVerificationPromptController.php
│   │   │   │   ├── NewPasswordController.php
│   │   │   │   ├── PasswordController.php
│   │   │   │   ├── PasswordResetLinkController.php
│   │   │   │   ├── RegisteredUserController.php
│   │   │   │   └── VerifyEmailController.php
│   │   │   ├── BrandController.php
│   │   │   ├── CategoryController.php
│   │   │   ├── Controller.php
│   │   │   ├── CustomerController.php
│   │   │   ├── InventoryTrackerController.php
│   │   │   ├── ProductController.php
│   │   │   ├── ProfileController.php
│   │   │   ├── PurchaseController.php
│   │   │   ├── PurchaseItemController.php
│   │   │   ├── SaleController.php
│   │   │   ├── SaleItemController.php
│   │   │   └── SupplierController.php
│   │   └── Requests
│   │       ├── Auth
│   │       │   └── LoginRequest.php
│   │       └── ProfileUpdateRequest.php
│   ├── Models
│   │   ├── Brand.php
│   │   ├── Category.php
│   │   ├── Customer.php
│   │   ├── InventoryTracker.php
│   │   ├── Product.php
│   │   ├── Purchase.php
│   │   ├── PurchaseItem.php
│   │   ├── Sale.php
│   │   ├── SaleItem.php
│   │   ├── Supplier.php
│   │   └── User.php
│   ├── Providers
│   │   └── AppServiceProvider.php
│   └── View
│       └── Components
│           ├── AppLayout.php
│           └── GuestLayout.php
├── artisan
├── bootstrap
│   ├── app.php
│   └── providers.php
├── composer.json
├── composer.lock
├── config
│   ├── app.php
│   ├── auth.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   └── session.php
├── database
│   ├── factories
│   │   └── UserFactory.php
│   ├── migrations
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   ├── 0001_01_01_000001_create_cache_table.php
│   │   ├── 0001_01_01_000002_create_jobs_table.php
│   │   ├── 2025_07_06_213909_create_brands_table.php
│   │   ├── 2025_07_06_213935_create_categories_table.php
│   │   ├── 2025_07_06_214000_create_customers_table.php
│   │   ├── 2025_07_06_214026_create_inventory_trackers_table.php
│   │   ├── 2025_07_06_214048_create_products_table.php
│   │   ├── 2025_07_06_214114_create_purchases_table.php
│   │   ├── 2025_07_06_214136_create_purchase_items_table.php
│   │   ├── 2025_07_06_214156_create_sales_table.php
│   │   ├── 2025_07_06_214214_create_sale_items_table.php
│   │   └── 2025_07_06_214229_create_suppliers_table.php
│   └── seeders
│       └── DatabaseSeeder.php
├── package.json
├── phpunit.xml
├── postcss.config.js
├── public
│   ├── .htaccess
│   ├── index.php
│   └── robots.txt
├── resources
│   ├── css
│   │   └── app.css
│   ├── js
│   │   ├── app.js
│   │   └── bootstrap.js
│   └── views
│       ├── auth
│       │   ├── confirm-password.blade.php
│       │   ├── forgot-password.blade.php
│       │   ├── login.blade.php
│       │   ├── register.blade.php
│       │   ├── reset-password.blade.php
│       │   └── verify-email.blade.php
│       ├── components
│       │   ├── application-logo.blade.php
│       │   ├── auth-session-status.blade.php
│       │   ├── danger-button.blade.php
│       │   ├── dropdown-link.blade.php
│       │   ├── dropdown.blade.php
│       │   ├── input-error.blade.php
│       │   ├── input-label.blade.php
│       │   ├── modal.blade.php
│       │   ├── nav-link.blade.php
│       │   ├── primary-button.blade.php
│       │   ├── responsive-nav-link.blade.php
│       │   ├── secondary-button.blade.php
│       │   └── text-input.blade.php
│       ├── dashboard.blade.php
│       ├── layouts
│       │   ├── app.blade.php
│       │   ├── guest.blade.php
│       │   └── navigation.blade.php
│       ├── profile
│       │   ├── edit.blade.php
│       │   └── partials
│       │       ├── delete-user-form.blade.php
│       │       ├── update-password-form.blade.php
│       │       └── update-profile-information-form.blade.php
│       └── welcome.blade.php
├── routes
│   ├── auth.php
│   ├── console.php
│   └── web.php
├── tailwind.config.js
├── tests
│   ├── Feature
│   │   ├── Auth
│   │   │   ├── AuthenticationTest.php
│   │   │   ├── EmailVerificationTest.php
│   │   │   ├── PasswordConfirmationTest.php
│   │   │   ├── PasswordResetTest.php
│   │   │   ├── PasswordUpdateTest.php
│   │   │   └── RegistrationTest.php
│   │   ├── ExampleTest.php
│   │   └── ProfileTest.php
│   ├── TestCase.php
│   └── Unit
│       └── ExampleTest.php
└── vite.config.js