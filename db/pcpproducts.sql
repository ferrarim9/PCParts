CREATE TABLE PcpProducts (
    online_sku VARCHAR(255) PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    productDescription TEXT
);