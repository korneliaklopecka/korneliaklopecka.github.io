var myBody = document.getElementsByTagName('body')[0];

const input = document.querySelector('input');
input.addEventListener('change', updateValue);

function updateValue(e)
{
    if(e.target.value != '')
    {  
        myBody.classList.remove('home');
        myBody.classList.toggle('results');
    }
    else
    {
        myBody.classList.remove('results');
    }
}
