const { default: axios } = require('axios');
const { functionsIn } = require('lodash');

require('./bootstrap');

require('alpinejs');


/*
    DARKMODE FOR NOW
*/

let moon = document.getElementById('moon');

moon.addEventListener('click', toggleDarkMode)

function toggleDarkMode()
{
    if(document.body.classList.value == "light")
    {
        document.body.classList.value = "dark"
        axios.post('http://localhost:3000/theme', {theme: 'dark'});
    }else{
        document.body.classList.value = "light"
        axios.post('http://localhost:3000/theme', {theme: 'light'});
    }
}

/*
    DARKMODE CODE BLOCK END
*/