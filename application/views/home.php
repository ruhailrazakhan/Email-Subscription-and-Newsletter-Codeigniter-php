<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
         <title>Fancy subscribe modal (md, lg) with delay functionality on page load - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Tajawal');
  body {
      margin: 0;
      font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      text-align: left;
      background-color: #fff;
  }
  .text-center {
      text-align: center!important;
  }
  .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
	    margin-bottom: .5rem;
	    font-family: inherit;
	    font-weight: 500;
	    line-height: 1.2;
	    color: inherit;
	}
.h1, h1 {
    font-size: 2.5rem;
}
.mt-5, .my-5 {
    margin-top: 3rem!important;
}

.pt-5, .py-5 {
    padding-top: 3rem!important;
}
#Reloadpage {
    cursor: pointer;
}

.badge-success {
    color: #fff;
    background-color: #28a745;
}
.badge {
    display: inline-block;
    padding: .25em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
}
</style>
</head>
<body>
<!-- subscribe Modal -->
<p class="text-center h1 mt-5 pt-5">2nd time <span id="Reloadpage" class="badge badge-success" title="click to Reload page">Refresh</span> your page to see the changes</p>
<p class="text-muted text-center">Wait! medium Modal will load in 5 seconds and large modal will load in 10 seconds.</p>
<?php echo $subscription_dialog_box;?>
</body>
</html>
