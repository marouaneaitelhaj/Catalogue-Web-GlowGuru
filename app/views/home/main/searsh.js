document.querySelector("#navbarSupportedContent > form > input").addEventListener('input', function () {
    for (var i = 0; i < document.querySelectorAll(".card-title").length; i++) {
        if(document.querySelectorAll(".card-title")[i].innerHTML.includes(document.querySelector("#navbarSupportedContent > form > input").value)){
            document.querySelectorAll(".card-title")[i].parentElement.parentElement.style.display = "block";
        }else{
            document.querySelectorAll(".card-title")[i].parentElement.parentElement.style.display = "none";
        }
    }
})

