<div class="footer container-fluid ">
    <div class="card">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="footer-text pull-left">
                    <div class="logo d-flex">
                    	<img src="assets\images\Scarlogo.png">
                    </div>
                </div>
                
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
               
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <h5 class="heading">Services</h5>
                <ul>
                    <li>Operational Leasing</li>
                    <li>Corparate Rental</li>
                    <li>Induvidual Rental</li>
                    <li>Support</li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <h5 class="heading">Company</h5>
                <ul class="card-text">
                    <li>About Us</li>
                    <li>Blog</li>
                    <li>Contact</li>
                    <li>Join Us</li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2">
                <h5 class="heading">Policys</h5>
                <ul class="card-text">
                   <li>Terms of Use</li>
                    <li>Privacy Policy</li>
                    <li>Cookie Policy</li>
                </ul>
                </div>
        </div>
            
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets\js\jquery\jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="assets\js\bootstrap\bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets\js\bootstrap\bootstrap.bundle.min.js.map"></script>
<script type="text/javascript" src="assets\js\slider.js"></script>
<script type="text/javascript" src="assets\js\search.js"></script>
<script type="text/javascript" src="assets\js\dropdown.js"></script>

<!-- Script for Modals --> 
<script>console.log('test');
  jQuery(document).ready(function($){
    console.log('test');
$('.viewbtn').on('click', function () {
    console.log('test');
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                    }
                });
            });
});
       
</script>
</body>
</html>
