@include('includes.header')
<style>
    .card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
    }
    .card-outer{
        position: relative;
        top: 0px;
        left: 0px;
        width: 1366px;
        height: 768px;
            /* margin: auto; */
        margin-top: calc(calc(100vh - 768px) * 0.5);
        margin-left: calc(calc(100vw - 1366px) * 0.5);
    }
    a {
        text-decoration: none;
    }
</style>
    <div class="card-outer">

            <div class="card shadow ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <img src="images/Capture.PNG" alt="Glide Acra image" style="width: 885px; height: 768px; ">
                        </div>
                        <div class="col-4 align-self-center " style="margin-left: -15px">
                            <div class="text-center">
                                <img src="images/header.PNG" alt="Glide Acra image"  style="width: 187px; height: 74px;">
                                <p class="mt-3" style="font-size:14px"><b>Welcome to Acra Lending Broker Portal</b></p>
                                <div class="form-page px-5 mt-5">
                                        <input type="text" name="name"  placeholder="Email ID" class="d-block mt-3 col-12">
                                        <input type="password" name="password" placeholder="Password"  class="d-block mt-5 col-12">
                                </div>
                                <div class="check-list px-5 mt-3">
                                    <div class="form-check mb-2 mr-sm-2">
                                        <div class="d-flex justify-content-between py-4">
                                            <div class="remember-me">
                                                <input class="form-check-input" type="checkbox" id="inlineFormCheck"/>
                                                <label class="form-check-label" for="inlineFormCheck"  style="font-size:12px;">Remember me</label>
                                            </div>
                                            <label class="form-check-label"  for="inlineFormCheck"><a href="#" style="font-size:12px; color:#0033A1;">Forgot Your Password?</a></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-button  col-md-11 mt-4 ms-3">
                                    <button class="btn btn-primary text-white " style="background: #213E97 0% 0% no-repeat padding-box; width: 338px; height: 48px; border-radius: 5px;"><a href="/second" style="color:white"><b>NEXT</a></b></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
@include('includes.footer')
