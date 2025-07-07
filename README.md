<h1 align="center">Point Of Sale</h1>

<p align="center">
<img src="public\README_resource\ER.jpg" alt="ER Diagram">
</p>


## **Key Entities and Their Relationships:**

- **Products:** Central to the system, products have attributes like name, SKU, unit price, and product image. They are linked to Categories (many-to-one) and Brands (many-to-one).
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

#### install composer require files
<p>composer install</p>

#### install npm require files
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