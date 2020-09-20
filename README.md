# Online_Grocery

AK rahul mohit ritik

# adding total price to be paid to thingies
ALTER TABLE `orders` ADD `groceries` INT(5) NULL AFTER `discount`, ADD `stationary` INT(5) NULL AFTER `groceries`, ADD `cosmetic` INT(5) NULL AFTER `stationary`;

ALTER TABLE `products` ADD `description` VARCHAR(400) NULL AFTER `wholeprice`;