const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');

// Connect to MongoDB
mongoose.connect('mongodb://localhost:27017/mydatabase', { useNewUrlParser: true, useUnifiedTopology: true });

// Define schemas for different collections
const productHiddenSchema = new mongoose.Schema({
  name: { type: String, required: true },
  description: { type: String, required: true },
  price: { type: Number, required: true }
});

const productSecretSchema = new mongoose.Schema({
  name: { type: String, required: true },
  description: { type: String, required: true },
  secret: { type: String, required: false } // Hidden field
});

const users = new mongoose.Schema({
  username: { type: String, required: true },
  password: { type: String, required: true },
});

const Products1 = mongoose.model('Products1', productHiddenSchema);
const Products2 = mongoose.model('Products2', productSecretSchema);
const Users1 = mongoose.model('Users1', users);
const Users2 = mongoose.model('Users2', users);

// Populate databases with test data
async function populateDatabase() {
  try {
    await Products1.deleteMany({});
    await Products1.insertMany([
      { name: 'Product 1', description: 'This one is visible', price: 100 },
      { name: 'Product 2', description: 'This one is visible', price: 200 },
      { name: 'Product 3', description: 'This one is visible', price: 150 },
      { name: 'Hidden Product', description: 'FLAG{XXXXXXXx}', price: 999999999 }
    ]);

    await Products2.deleteMany({});
    await Products2.insertMany([
      { name: 'Product 1', description: 'No secrets here', hiddensecret: 'FLAG{XXXXXXXXXy}' }
    ]);

    await Users1.deleteMany({});
    await Users1.insertMany([
      { username: 'thoms', password: 'thoms' },
      { username: 'admin', password: 'ihugfdsertyu' }
    ]);
    
    await Users2.deleteMany({});
    await Users2.insertMany([
      { username: 'thoms', password: 'thoms' },
      { username: 'admin', password: 'adpoiuytresdfgvh' }
    ]);

    console.log('Databases populated : OK');
  } catch (error) {
    console.error('Error populating the databases:', error);
  }
}

populateDatabase();

// Create an Express app
const app = express();
app.use(bodyParser.json());
app.use((err, req, res, next) => {
    if (err instanceof SyntaxError && err.status === 400 && 'body' in err) {
        return res.status(400).send('<p>Invalid JSON format.</p>');
    }
    next();
});
app.use(bodyParser.urlencoded({ extended: true }));

app.get('/', (req, res) => {
    res.send(`
        <div onclick="location.href='/'" style="cursor:pointer;">
            <h1>NoSQL Injection Lab</h1>
        </div>
        <ul>
            <li><a href="/nosqli1">NoSQLi 1</a></li>
            <li><a href="/nosqli2">NoSQLi 2</a></li>
            <li><a href="/nosqli3">NoSQLi 3</a></li>
            <li><a href="/nosqli4">NoSQLi 4</a></li>
        </ul>
    `);
});

function renderPage(title, action, method = 'GET',description, help="", placeholder="Product 1") {
    return `
        <div onclick="location.href='/'" style="cursor:pointer;">
            <h1>${title}</h1>
        </div>
        <h2>${description}</h2>
        <p>${help}</p>
        <form method="${method}" action="${action}" ${method === 'POST' ? `onsubmit="event.preventDefault(); fetch('${action}', {method: 'POST', headers: {'Content-Type': 'application/json'}, body: JSON.stringify({ name: document.getElementById('name').value })}).then(response => response.text()).then(html => document.getElementById('result').innerHTML = html);"` : ''}>
            <input type="text" id="name" name="q" placeholder='${placeholder}' required>
            <input type="submit" value="Search">
        </form>
        <div id="result"></div>
    `;
}

function renderPageauth(title, action) {
    return `
        <div onclick="location.href='/'" style="cursor:pointer;">
            <h1>${title}</h1>
        </div>
        <h2>Find "admin" password !</h2>
        <p>Your credentials are thoms:thoms</p>
        <form id="auth-form">
            <input type="text" id="username" name="username" placeholder="Enter username" required><br>
            <input type="password" id="password" name="password" placeholder="Enter password" required><br>
            <input type="submit" value="Authenticate">
        </form>
        <div id="result"></div>

        <script>
            document.getElementById('auth-form').addEventListener('submit', async function(event) {
                event.preventDefault(); // Empêche la soumission normale

                const username = document.getElementById('username').value;
                const password = document.getElementById('password').value;

                const response = await fetch('${action}', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ username, password })
                });

                const data = await response.json();
		console.log(data.success);
                if (data.success) {
                    window.location.href = data.redirect; 
                } else {
                    document.getElementById('result').innerHTML = '<p>' + data.message + '</p>'; // Affiche une erreur
                }
            });
        </script>
    `;
}


// NoSQLi 1 - Injection via req.query.q on Products1 collection
app.get('/nosqli1', async (req, res) => {
    let resultHtml = '';
    if (req.query.q) {
        try {
            const products = await Products1.find({ name: req.query.q }); // NoSQL injection vulnerable
            console.log(products);
            resultHtml = products.length ? 
                products.map(p => `<p>${p.name} - ${p.description} - $${p.price}</p>`).join('') 
                : '<p>No products found.</p>';
        } catch (error) {
            resultHtml = '<p>Error querying database.</p>';
        }
    }
    res.send(renderPage('NoSQLi 1 - Operator Injection', '/nosqli1', 'GET', 'Find the hidden product !') + resultHtml);
});

// NoSQLi 2 - Injection via full request body on Products2 collection
app.get('/nosqli2', (req, res) => {
    res.send(renderPage('NoSQLi 2 - Request Injection', '/nosqli2', 'POST', 'Find the hidden field of \"Product 1\" !'));
    console.log(Object.keys(this)[3]);
});

app.post('/nosqli2', async (req, res) => {
    let resultHtml = '';
    try {
        const query = req.body; // NoSQL injection extremely vulnerable
        const products = await Products2.find(query);
        resultHtml = products.length ? 
            products.map(p => `<p>${p.name} - ${p.description}</p>`).join('') 
            : '<p>No products found.</p>';
    } catch (error) {
        resultHtml = '<p>Error querying database.</p>';
    }
    res.send(resultHtml);
});


app.get('/nosqli3', (req, res) => {
    res.send(renderPageauth('NoSQLi 3 - Authentication', '/nosqli3', 'POST', ''));
});

// NoSQLi 3 - Injection via $where on ProductMystery collection
app.post('/nosqli3', async (req, res) => {
    try {
        const user = await Users1.findOne({ 
            username: req.body.username, 
            password: req.body.password 
        });

        if (user) {
            return res.json({ success: true, redirect: '/authenticated' }); 
        } else {
            return res.json({ success: false, message: 'Wrong credentials.' });
        }
    } catch (error) {
        return res.json({ success: false, message: 'Error querying database.' });
    }
});


app.get('/authenticated', (req, res) => {
    res.send('<h1>You are authenticated!</h1><p>That\'s all.</p><a href="./nosqli3">Go back</a>'); 
});

app.get('/nosqli4', async (req, res) => {
    let resultHtml = '';
    let password ='';
    if (req.query.q) {
        try {
            const user = await Users2.findOne({$where: `this.username == '${req.query.q}'`}); 
            if(user){
            	if(user.username!="admin"){
            		password=user.password;
            	}
            	resultHtml = `<p>Username : ${user.username}<br>Password : ${password}</p>`;
            }
            else{
            resultHtml = `<p>${req.query.q} does not exists.</p>`;
            }
        } catch (error) {
            console.log(error);
            resultHtml = '<p>Error querying database.</p>';
        }
    }
    res.send(renderPage('NoSQLi 4 - User lookup', '/nosqli4', 'GET', 'Find the admin password via the user lookup functionnality!', "thoms is a valid user", "") + resultHtml);
});
    

app.listen(3000, () => {
  console.log('Server is running on port 3000');
});


//transformer le formulaire de /nosqli3 en formulaire d'authentification 
