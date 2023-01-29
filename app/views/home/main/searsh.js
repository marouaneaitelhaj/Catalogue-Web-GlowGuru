document.querySelector("#navbarSupportedContent > form > input").addEventListener('input', function () {
    // for (var i = 0; i < document.querySelectorAll(".card-title").length; i++) {
    //     if(document.querySelectorAll(".card-title")[i].innerHTML.includes(document.querySelector("#navbarSupportedContent > form > input").value)){
    //         document.querySelectorAll(".card-title")[i].parentElement.parentElement.style.display = "block";
    //     }else{
    //         document.querySelectorAll(".card-title")[i].parentElement.parentElement.style.display = "none";
    //     }
    // }
    // console.log(document.querySelector("#navbarSupportedContent > form > input").value);
    $.ajax({
        url: "./search?libelle=" + document.querySelector("#navbarSupportedContent > form > input").value,
        beforeSend:function () {
            document.querySelectorAll(".container")[0].innerHTML = '<div class="spinner-border" role="status"> <span class="sr-only">Loading...</span> </div>';
        },
        success: function (data) {
            var wrapper= document.createElement('div');
            wrapper.innerHTML= data;
            // console.log();
            document.querySelectorAll(".container")[0].innerHTML = wrapper.querySelector(".container").innerHTML;
        }
    })
})
var arr = [1,2,3,4,5];
for(var i = 0; i<arr.length;i + 2){
    console.log(arr[i]);
}
//use