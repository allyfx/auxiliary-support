const express = require('express');
const expressLayouts = require('express-ejs-layouts');

const app = express();

app.set('view engine', 'ejs');
app.use(expressLayouts);

app.listen(3001, () => {
  console.log('Server is on!');
});
