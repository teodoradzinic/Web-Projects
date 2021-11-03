$('h1').html('Suitable Heading');
$('p').html('<strong>Lorem</strong> ipsum dolor sit amet.');

function change(){
    $('.second').html($('input').val());
}

function function1(){
    alert("mouseout");
}
function function2() {
 alert("dblclick");   
}
function function3() {
    alert("contextmenu");
}

$('.box1').on({mouseout: function1, dblclick: function2, contextmenu: function3});

$('.box2').hide();

$('.swap').click(function(){
    $('div').toggle("slow");
})