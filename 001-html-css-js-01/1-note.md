# 001-html-css-js-01
This is a simple HTML, CSS, and JavaScript project.

Table of Contents
- [Files](#files)
- [Description](#description)
- [Usage HTML](#usage-html)
- [Usage CSS](#usage-css)
- [Usage JavaScript](#usage-javascript)



## Files
- `index.html`: The main HTML file.
- `style.css`: The CSS file for styling.
- `script.js`: The JavaScript file for interactivity.

## Description
This project demonstrates a basic web page setup using HTML for structure, CSS for styling, and JavaScript for interactivity. The `index.html` file contains the main content, `style.css` provides the visual design, and `script.js` adds dynamic behavior to the page.

## Usage HTML
To use this project, simply open the `index.html` file in a web browser. 
```html
<h1>Hello, World!</h1>
<h2>Hello, World!</h2>
<p>This is a paragraph.</p>
<ul>
  <li>List item 1</li>
  <li>List item 2</li>
  <li>List item 3</li>
</ul>
```

```html
<img src="image.jpg" alt="Description of image">
```

```html
<a href="https://example.com">Example Link</a>
```

### HTML Comments
```html
<!-- This is a comment in HTML -->
```

### HTML Elements
The HTML element is everything from the start tag to the end tag:
```html
<p>This is a paragraph.</p>
```

### HTML Attributes
HTML attributes provide additional information about an element. They are always specified in the start tag and usually come in name/value pairs like `name="value"`:
```html
<p style="color:red;">This is a red paragraph.</p>
<a href="https://example.com" target="_blank">Example Link</a>
```


### Never Skip the End Tag
Some HTML elements will display correctly, even if you forget the end tag:
```html
<li>List item without closing tag
<li>Another list item
```

### Block-level Elements
Block-level elements take up the full width available and start on a new line. Examples include `<div>`, `<p>`, `<h1>` to `<h6>`, `<ul>`, and `<li>`.

### Inline Elements
Inline elements do not start on a new line and only take up as much width as necessary. Examples include `<span>`, `<a>`, `<strong>`, and `<em>`.

### `<div>`as a container
The `<div>` element is often used to group sections of a web page together. It is a block-level element and can contain other HTML elements. This is useful for applying CSS styles or JavaScript functionality to a specific section of the page.

```html
<div class="container">
  <h1>Heading inside a div</h1>
  <p>Paragraph inside a div.</p>
</div>
```



## Usage CSS

CSS can be added to HTML documents in 3 ways:

Inline - by using the style attribute inside HTML elements
Internal - by using a <style> element in the <head> section
External - by using a <link> element to link to an external CSS file

### Inline CSS
An inline CSS is used to apply a unique style to a single HTML element.
```html
<h1 style="color:blue;">A Blue Heading</h1>

<p style="color:red;">A red paragraph.</p>
```

### Internal CSS
An internal CSS is used to define a style for a single HTML page.
```html
<head>
  <style>
    h1 {
      color: green;
    }
    p {
      color: orange;
    }
  </style>
</head>
```



### External CSS
An external style sheet is used to define the style for many HTML pages.
```html
<head>
  <link rel="stylesheet" href="style.css">
</head>
```

## Usage JavaScript
Why Study JavaScript?
JavaScript is one of the 3 languages all web developers must learn:

HTML to define the content of web pages

CSS to specify the layout of web pages

JavaScript to program the behavior of web pages

```html
<button type="button" onclick="document.getElementById('demo').innerHTML = Date()">Click me to display Date and Time.</button>

<p id="demo"></p>
```
### JavaScript in `<body>`
In this example, a JavaScript function is placed in the <body> section of an HTML page.
The function is invoked (called) when a button is clicked:

```html
<body>
    <h2>Display Date and Time</h2>
    <button type="button" id="b1">
        Click me to display Date and Time.
    </button>
    <p id="demo"></p>

    <script>
        document.getElementById('b1').addEventListener('click', function() {
            document.getElementById('demo').innerHTML = Date();
        });
    </script>
</body>
```

```html
<body>
    <h2>Display Date and Time ON - OFF</h2>
        <button type="button" id="b1">
            ON 
        </button>
        <button type="button" id="b2">
            OFF 
        </button>
    <p id="demo"></p>

    <script>
        document.getElementById('b1').addEventListener('click', function() {
            document.getElementById('demo').innerHTML = Date();
        });
        document.getElementById('b2').addEventListener('click', function() {
            document.getElementById('demo').innerHTML = "";
        });
    </script>
</body>
```
### External JavaScript
Scripts can also be placed in external files:

External file: myScript.js
```javascript
document.getElementById('b1').addEventListener('click', function() {
    document.getElementById('demo').innerHTML = Date();
});
document.getElementById('b2').addEventListener('click', function() {
    document.getElementById('demo').innerHTML = "";
});
```

HTML file:
```html
<body>
    <h2>Display Date and Time ON - OFF</h2>
        <button type="button" id="b1">
            ON 
        </button>
        <button type="button" id="b2">
            OFF 
        </button>
    <p id="demo"></p>

    <script src="myScript.js"></script>
</body>
```


