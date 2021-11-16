//alert('Hello!');
var one = 'Hello my friends';
//alert(one);
console.log(one);

//document.getElementById('message').innerHTML='hi!!!!!!!!!!!!!!';
$('#message').text(one);
$('#message').fadeOut("slow");

//$('.myclass').text(one);
document.getElementsByClassName("myclass")[0].innerHTML = one;
console.log(getElementsByClassName("myclass"));


//document.getElementsByClassName("myclass")[0].style.color = "red";
$(.'myclass').css('color','green');


$('.color').css('color', 'red');

/* Напишите ваш код на jQuery ниже этого комментария */
$('.color2').css('color', '#2b772e');