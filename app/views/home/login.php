<div class="d-flex justify-content-around  container m-4">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://images.pexels.com/photos/6811386/pexels-photo-6811386.jpeg" class="img-fluid" alt="Sample image">
            </div>
            <div class=" rowcol-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="" method="post">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 mb-3 me-3">Sign in</p>
                       
                    </div>


                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" name="email" class="form-control form-control-lg" placeholder="Enter a valid email address" required/>
                        <label class="form-label" for="form3Example3">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" name="Password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" required/>
                        <label class="form-label" for="form3Example4">Password</label>
                    </div>
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" id="btn" name="btn" class="btn btn-danger btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" disabled>Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
</div>
<script>
document.querySelector("#form3Example4").addEventListener('input',function(){
if(document.querySelector("#form3Example3").value !== '' && document.querySelector("#form3Example4").value !== ''){
    document.querySelector("#btn").disabled = false;
}else{
    document.querySelector("#btn").disabled = true;
}
})
document.querySelector("#form3Example3").addEventListener('input',function(){
if(document.querySelector("#form3Example3").value !== '' && document.querySelector("#form3Example4").value !== ''){
    document.querySelector("#btn").disabled = false;
}else{
    document.querySelector("#btn").disabled = true;
}
})
</script>