var element = document.getElementById('number');
var maskOptions = {
    mask: '+7(000)000-00-00',
    lazy: false
} 
var mask = new IMask(element, maskOptions);
