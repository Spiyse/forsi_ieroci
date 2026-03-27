PRAGMA foreign_keys = OFF;
BEGIN TRANSACTION;

CREATE TABLE IF NOT EXISTS categories (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    identifier VARCHAR(100) UNIQUE,
    category_name VARCHAR(255) NOT NULL,
    category_details TEXT,
    created_at DATETIME,
    updated_at DATETIME
);

CREATE TABLE IF NOT EXISTS products (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    category_id INTEGER NOT NULL,
    identifier VARCHAR(100) UNIQUE,
    weapon_name VARCHAR(255) NOT NULL,
    product_details TEXT,
    price NUMERIC NOT NULL,
    quantity_in_stock INTEGER NOT NULL DEFAULT 0,
    needs_licence INTEGER NOT NULL DEFAULT 0,
    manufacturer VARCHAR(255),
    caliber VARCHAR(255),
    image VARCHAR(255),
    created_at DATETIME,
    updated_at DATETIME,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
);

COMMIT;
PRAGMA foreign_keys = ON;
