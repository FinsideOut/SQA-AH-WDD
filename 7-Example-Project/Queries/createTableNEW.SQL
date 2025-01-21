-- Create the Pokemon table with an additional column for image URLs
CREATE TABLE Pokemon (
    PokemonID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(50) NOT NULL,
    Type1 VARCHAR(20) NOT NULL,
    Type2 VARCHAR(20),
    HP INT NOT NULL,
    Attack INT NOT NULL,
    Defense INT NOT NULL,
    SpecialAttack INT NOT NULL,
    SpecialDefense INT NOT NULL,
    Speed INT NOT NULL,
    Generation INT NOT NULL,
    Legendary BOOLEAN NOT NULL,
    ImageURL VARCHAR(255) -- Added column for the image URL
);

CREATE TABLE user (
    email VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    numGuesses INT DEFAULT 0,
    numCorrect INT DEFAULT 0,
    streak INT DEFAULT 0,
    PRIMARY KEY (email)
);


-- Continue inserting data for other Pokémon with their respective image URLs...
