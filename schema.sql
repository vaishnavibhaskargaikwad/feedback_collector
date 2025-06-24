USE feedback;

CREATE TABLE Feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    email VARCHAR(20) NOT NULL,
    feedback text,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);