CREATE TABLE religion_details ( id INT AUTO_INCREMENT PRIMARY KEY, phone_number VARCHAR(15), -- Foreign key referring to the mobile column in users table
 religion VARCHAR(50), cast VARCHAR(50), languages VARCHAR(50), FOREIGN KEY (phone_number)
  REFERENCES users(mobile) ); 