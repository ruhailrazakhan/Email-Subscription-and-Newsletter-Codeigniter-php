<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
/***********************************************/
/***************** Packages ********************/
/***********************************************/
@import url('https://fonts.googleapis.com/css?family=Tajawal');
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

#subscribeModal .modal-content{
	overflow:hidden;
}
a.h2{
    color:#007b5e;
    margin-bottom:0;
    text-decoration:none;
}
#subscribeModal .form-control {
    height: 56px;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
	padding-left:30px;
}
#subscribeModal .btn {
    border-top-right-radius: 30px;
    border-bottom-right-radius: 30px;
	padding-right:20px;
	background:#007b5e;
	border-color:#007b5e;
}
#subscribeModal .form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #007b5e;
    outline: 0;
    box-shadow: none;
}
#subscribeModal .top-strip{
	height: 155px;
    background: #007b5e;
    transform: rotate(141deg);
    margin-top: -94px;
    margin-right: 190px;
    margin-left: -130px;
    border-bottom: 65px solid #4CAF50;
    border-top: 10px solid #4caf50;
}
#subscribeModal .bottom-strip{
	height: 155px;
    background: #007b5e;
    transform: rotate(112deg);
    margin-top: -110px;
    margin-right: -215px;
    margin-left: 300px;
    border-bottom: 65px solid #4CAF50;
    border-top: 10px solid #4caf50;
}

/**************************/
/****** modal-lg stips *********/
/**************************/
#subscribeModal .modal-lg .top-strip {
    height: 155px;
    background: #007b5e;
    transform: rotate(141deg);
    margin-top: -106px;
    margin-right: 457px;
    margin-left: -130px;
    border-bottom: 65px solid #4CAF50;
    border-top: 10px solid #4caf50;
}
#subscribeModal .modal-lg .bottom-strip {
    height: 155px;
    background: #007b5e;
    transform: rotate(135deg);
    margin-top: -115px;
    margin-right: -339px;
    margin-left: 421px;
    border-bottom: 65px solid #4CAF50;
    border-top: 10px solid #4caf50;
}

/****** extra *******/
#Reloadpage{
    cursor:pointer;
}
</style>
<!-- subscribe Modal -->
<p class="text-center h1 mt-5 pt-5">2nd time <span id="Reloadpage" class="badge badge-success" title="click to Reload page">Refresh</span> your page to see the changes</p>
<p class="text-muted text-center">Wait! medium Modal will load in 5 seconds and large modal will load in 10 seconds.</p>
<div class="modal fade text-center py-5"  id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
				<div class="top-strip"></div>
                <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank">Sunlimetech</a>
                <h3 class="pt-5 mb-0 text-secondary">Newsletter</h3>
                <p class="pb-1 text-muted"><small>Sign up to update with our latest news and products.</small></p>
                <form action="<?php echo base_url();?>oo">
                    <div class="input-group mb-3 w-75 mx-auto">
    				  <input type="email" class="form-control" placeholder="sunlimetech@gmail.com" aria-label="Recipient's username" aria-describedby="button-addon2" required>
    				  <div class="input-group-append">
    					<button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-paper-plane"></i></button>
    				  </div>
    				</div>
    			</form>
                <p class="pb-1 text-muted"><small>Your email is safe with us. We won't spam.</small></p>
				<div class="bottom-strip"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade text-center py-5 subscribeModal-lg"  id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
				<div class="top-strip"></div>
                <a class="h2" href="https://www.fiverr.com/sunlimetech/design-and-fix-your-bootstrap-4-issues" target="_blank">Sunlimetech</a>
                <h3 class="pt-5 mb-0 text-secondary">Newsletter</h3>
                <p class="pb-1 text-muted"><small>Sign up to update with our latest news and products.</small></p>
                <form>
                    <div class="input-group mb-3 w-75 mx-auto">
    				  <input type="email" class="form-control" placeholder="sunlimetech@gmail.com" aria-label="Recipient's username" aria-describedby="button-addon2" required>
    				  <div class="input-group-append">
    					<button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-paper-plane"></i></button>
    				  </div>
    				</div>
    			</form>
                <p class="pb-1 text-muted"><small>Your email is safe with us. We won't spam.</small></p>
				<div class="bottom-strip"></div>
            </div>
        </div>
    </div>
</div>
<!-- ./subscribe Modal -->