
<?php
 require("Dependencies.php");
?>

<style>
.active {
        text-decoration: underline;
}
</style>

<script> 

//code to add undreline to current item
    $(document).ready(function () {
        var url = window.location.href;
	let me = $('ul li a');
	//using jquery map
	$(me).map(function(idx, elem) {
		  if(url.includes($(elem).attr("href"))){
			$(elem).addClass("active");
			console.log("Its alive");
                }else{		
			console.log("Hello??");
		}
	});
	//minimal changes to your co
      }
    );

 </script>
	<nav class="navbar sticky-top navbar-expand-lg" style = "background-color:#7851a9 " >
		<a href="Home.php"><img class="navbar-brand" src="https://upload.wikimedia.org/wikipedia/en/8/82/FloridaPolyLogo2017.jpg"></img></a>
		<input type="image" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</input>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="Home.php">Home</a>
				</li>
		
				<li class="nav-item">
					<a class="nav-link" href="About.php">About</a>
				</li>
				 <li class="nav-item">
                                        <a class="nav-link" href="Contribute.php">Contribute</a>
                                </li>
		
		</ul>
				
		</div>
	</nav>
<div>
     <form class="example" action="action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search">Search </i></button>
        </form>
</div>
