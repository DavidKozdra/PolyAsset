
<?php
//This page adds the nav bar and search bar to every page

//add bootstrap and extra crap
 require("Dependencies.php");
?>

<style>
/* extra specific style code for links and active header */
.active {
        text-decoration: underline;
}

a{
color:white;

}
p{
color:purple;
}
</style>

<script> 

//code to add undreline to current item
    $(document).ready(function () {
        var url = window.location.href;
	let me = $('ul a');
	//using jquery map
	$(me).map(function(idx, elem) {
		  if(url.includes($(elem).attr("href"))){
			$(elem).addClass("active");
                }
	});
	//minimal changes to your co
      }
    );

 </script>

<!--bootstrap navbar -->
	<nav class="navbar sticky-top navbar-expand-lg" style = "background-color:#7851a9 " >
		<a href="index.php"><img class="navbar-brand" src="https://floridapoly.edu/_resources/assets/icons/svg/logo.svg"></img></a>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
					<a class="nav-item " href="index.php">Home</a>
					<a class="nav-item " href="About.php">About</a>
                                        <a class="nav-item " href="Contribute.php">Contribute</a>
		</ul>
				
		</div>
	</nav>
<div>

<!--Search Bar -->
     <form class="example p2 " method="post"  action="action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search">Search </i></button>
    </form>
</div>
