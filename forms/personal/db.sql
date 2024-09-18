CREATE TABLE personal_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone_number VARCHAR(15),  -- Foreign key referring to the mobile column in users table
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    gender VARCHAR(50),
    bloodgroup VARCHAR(50),
    complexion VARCHAR(50),
    height VARCHAR(50),
    weight VARCHAR(50),
    location VARCHAR(50),
    
    
    FOREIGN KEY (phone_number) REFERENCES users(mobile)
);
