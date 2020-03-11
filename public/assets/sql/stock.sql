DROP TABLE IF EXISTS stock;

CREATE TABLE stock (
	id INT AUTO_INCREMENT,
    code VARCHAR(20) NOT NULL,
    description VARCHAR(255),
    quantity INT NOT NULL,
	category VARCHAR(100),
    manufacturer VARCHAR(100),
	registred TIMESTAMP,
    altered TIMESTAMP,    
    CONSTRAINT pk_stock PRIMARY KEY (id),
    CONSTRAINT uk_stock UNIQUE KEY (code) 
);

SELECT * FROM stock



