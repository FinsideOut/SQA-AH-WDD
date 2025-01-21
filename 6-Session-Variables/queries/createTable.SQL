-- The database must be called "SessionVariables"
-- (or just modify the function in utils)

CREATE TABLE Users (
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL PRIMARY KEY,
    password VARCHAR(255) NOT NULL
);
