<footer class="border-top mt-4" style="
	width: 100%; 
	padding: 2rem 0; 
	flex-shrink: 0; 
    height: 100px;
    padding-left: 10px;
    line-height: 50px;
    bottom: 0px;">
	<div class="my-auto text-center">
		<small class="text-light">&copy; <script>
				document.write(new Date().getFullYear());
			</script> Anteng Elektronik</small>
	</div>
</footer>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
	'use strict';
	window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    	form.addEventListener('submit', function(event) {
    		if (form.checkValidity() === false) {
    			event.preventDefault();
    			event.stopPropagation();
    		}
    		form.classList.add('was-validated');
    	}, false);
    });
}, false);
})();
</script>

</body>
</html>