CREATE TABLE product_information ( id INT PRIMARY KEY AUTO_INCREMENT, item_name VARCHAR(255) not NULL, category VARCHAR(255) not null, items_number VARCHAR(20) DEFAULT 5, image_primary VARCHAR(255) not null, image2 VARCHAR(255) not null, image3 VARCHAR(255) not null, image4 VARCHAR(255) not null, image5 VARCHAR(255) not null, image6 VARCHAR(255) not null, description VARCHAR(300) not null, price VARCHAR(10) not null, wishlist_tag BOOLEAN DEFAULT FALSE, cart_tag BOOLEAN DEFAULT false, new_arrival_tag BOOLEAN DEFAULT false, in_demand_tag BOOLEAN DEFAULT false, trending_tag BOOLEAN DEFAULT false, flash_sale_tag BOOLEAN DEFAULT false, availability BOOLEAN DEFAULT true, ratings VARCHAR(5) DEFAULT NULL, reviews VARCHAR(5) DEFAULT NULL, seller_name VARCHAR(20) not null, seller_phone_contact VARCHAR(20) not null, seller_email_contact VARCHAR(20) not null, seller_website_link VARCHAR(20) not null, seller_organization VARCHAR(200) DEFAULT 'Self Bussiness', comming_soon BOOLEAN DEFAULT false );