
Usage
-----

Contact form is a jQuery-plugin, so first of include jQuery
```
<script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
<script src='contactForm.js'></script>
```

Then we need to add the nice style to the html-document
```
<link rel="stylesheet" type="text/css" href="style.css">
```

Then create your form. Notice the notice the **id**: _#contact_. That
is the id that you need to specify on the link, _or button_, that 
shall trigger the ContactForm. 

```
<div id="contact" class="contact-form">
    <span data-close="#" class=close>X</span>
    <form action="#">
        <ul>
            <li>
                <label for="name">Namn: </label>
                <input name="name" id="name">
            </li>
            <li>
                <label for="email">Email: </label>
                <input name="email" id="email">
            </li>
            <li>
                <label for="text">Text: </label>
                <textarea name="text" id="text" cols="30" rows="30">
                </textarea>
            </li>
            <li>
                <input type="submit" value="Skicka">
            </li>
        </ul>
    </form>
</div>
```

Then you need to create the links, _or buttons_, that shall call the ContactForm.
Notice the `data-toggle`. It's crucial that the value if `data-toggle` is the same
as the **id** specified for the form. In our case the id is _#contact_.
```
<button data-toggle="#contact">Contact me button</button>
<a href="#" data-toggle="#contact">Contact me link</a>
```

And then finally add this to the bottom of the html-document.

```
$(document).ready(function() {
    $('[data-toggle]').ContactForm();
});
```

You can pass an object to `ContactForm()` that can specify an other effect or a different speed. 

| Parameter      | Type   | Default    | Available arguments                |
|----------------|--------|------------|------------------------------------|
| effect         | String | fadeToggle |  slideToggle _or_ fadeToggle       |
| speed          | Number | 300        |  Any number that is grater then 0  |

Under is an example how to do it.
```
$(document).ready(function() {
    $('[data-toggle]').ContactForm({
        effect: 'slideToggle',
        speed: 2000,
    });
});
```
[Demo](../playground/ContactForm/)   
[JS](../playground/ContactForm/main.js)   
[CSS](../playground/ContactForm/style.less)   

