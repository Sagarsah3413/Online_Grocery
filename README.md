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