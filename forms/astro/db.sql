CREATE TABLE astro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone_number VARCHAR(15),  -- Foreign key referring to the mobile column in users table
    dob VARCHAR(50),
    pob VARCHAR(50),
    tob VARCHAR(50),
    rashi VARCHAR(50),
    nakshatra VARCHAR(50),
    gotra VARCHAR(50),
    
    
    
    FOREIGN KEY (phone_number) REFERENCES users(mobile)
);
