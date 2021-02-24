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
    if(document.body.classList.value == "")
    {
        document.body.classList.value = "dark"
    }else{
        document.body.classList.value = ""
    }
}

/*
    DARKMODE CODE BLOCK END
*/