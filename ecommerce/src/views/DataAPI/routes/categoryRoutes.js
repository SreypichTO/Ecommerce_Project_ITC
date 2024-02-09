const express = require('express');
const router = express.Router();
const fs = require('fs');
const { v4: uuidv4 } = require('uuid');

// Read categories from JSON file
const readCategoriesFromFile = () => {
  const data = fs.readFileSync('./data/categories.json');
  return JSON.parse(data);
};

// Write categories to JSON file
const writeCategoriesToFile = (categories) => {
  fs.writeFileSync('./data/categories.json', JSON.stringify(categories, null, 2));
};

// Get all categories
router.get('/all', (req, res) => {
  const categories = readCategoriesFromFile();
  res.json(categories);
});

// Create a new category
router.post('/create', (req, res) => {
  const { category, price, description, image, title } = req.body;

  // Generate a unique ID for the category
  const id = uuidv4();
  // Create a new category object
  const newCategory = {
    id,
    category,
    price,
    description,
    image,
    title,
    
  };

  // Read existing categories
  const categories = readCategoriesFromFile();

  // Add the new category to the array
  categories.push(newCategory);

  // Write the updated categories to the file
  writeCategoriesToFile(categories);

  res.json(newCategory);
});

module.exports = router;
