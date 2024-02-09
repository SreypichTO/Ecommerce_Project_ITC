const express = require('express');
const app = express();
const categoryRoutes = require('./routes/categoryRoutes');

// Parse JSON request bodies
app.use(express.json());

// Mount the category routes
app.use('/categories', categoryRoutes);

// Start the server
app.listen(3000, () => {
  console.log('Server is running on port 3000');
});
