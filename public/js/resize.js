
function resize(){

    var elms = document.getElementsByClassName("thumb");
    for (i=0; elms[i]; i++){
        elms[i].src="{{ asset('img/shop/icon.png')}}";
    };


};



$(window).load(function(){
    resize();
});