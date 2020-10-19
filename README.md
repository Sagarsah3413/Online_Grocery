# Online_Grocery

AK rahul mohit ritik

# adding total price to be paid to thingies
ALTER TABLE `orders` ADD `groceries` INT(5) NULL AFTER `discount`, ADD `stationary` INT(5) NULL AFTER `groceries`, ADD `cosmetic` INT(5) NULL AFTER `stationary`;

ALTER TABLE `products` ADD `description` VARCHAR(400) NULL AFTER `wholeprice`;


orders table detail
each order total price = stationary + groceries + dairy +..+..

price taken from customer = total -  discount(on beharf of company)

groceries = sum of wholesale price
stationary = "   "  "

# profit calculation

for every order
profit = total - discount - stationary - grocers - bakery - ...



# view table

CREATE TABLE `grocers`.`view` ( `viewid` INT(4) NOT NULL , `productid` INT(4) NULL , `details` VARCHAR(600) NULL , `services` VARCHAR(600) NULL , `specifications` VARCHAR(600) NULL , `description` VARCHAR(600) NULL , PRIMARY KEY (`viewid`));