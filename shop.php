<?php 
session_start(); 


if (isset($_POST["add_to_cart"])) { 
	
	
	$product_id = $_POST["product_id"]; 
	
	
	$product_quantity = $_POST["product_quantity"]; 

	
	if (!isset($_SESSION["cart"])) { 
		$_SESSION["cart"] = []; 
		header("location:cart.php"); 
	} 

	
	$_SESSION["cart"][$product_id] = $product_quantity; 
	header("location:cart.php"); 
} 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title>The BookShelf</title> 
		<link rel="stylesheet"
				href="shop.css"> 
	</head> 
	<body> 
		<header> 
		<center><img src= 
"https://i.pinimg.com/236x/48/82/ac/4882ac5e3988487bc75764bc51ab237e--swift-evolution.jpg" alt="Logo">	
			<h1>Welcome <?php 
			$user =$_SESSION["user"]; 
			echo $user['name'];
			error_reporting(-1); 
			?> to The BookShelf</h1> 
			</center>
				</header> 
		<nav> 
			<ul> 
				<li><a href="shop.php">Home</a></li> 
				<li><a href="shop.php">Shop</a></li> 
				<li><a href="cart.php">Cart</a></li> 
				<li><a href="logout.php">Logout</a></li> 

			</ul> 
		</nav> 
		<main> 
			<section> 
				<h2 style="color:MediumVioletRed;"><center>Products</center></h2> 
				<ul> 
					<li> 
						<h3>The Power of Your Subconscious Mind</h3> 
						<img src= 
"https://the4thdimension.ca/wp-content/uploads/2018/07/subconscious-single-book-360x570.png"
							alt="Product 1"> 
						<p>Book to realize your InnerSelf</p> 
						<p><span>Rs.450</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="1"> 
							<label for="product1_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product1_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 
					<li> 
						<h3>The Sherlock Holmes</h3> 
						<img src= 
"https://th.bing.com/th/id/OIP.4CwjuYQ5G8Q5cDTOtGKhHQDCFA?pid=ImgDet&w=273&h=450&rs=1"
							alt="Product 2"> 
						<p>Fiction to kill your Boredom</p> 
						<p> 
							<span>Rs.300</span> 
						</p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="2"> 
							<label for="product2_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product2_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart 
						</button> 
						</form> 
					</li> 
					<li> 
						<h3>Wings of Fire</h3> 
						<img src= 
"https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1588286863l/634583.jpg"
							alt="Product 3"> 
						<p>Auto-Biography of Missile Man Of India</p> 
						<p> 
							<span>Rs.380</span> 
						</p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="3"> 
							<label for="product3_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product3_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart 
							</button> 
						</form> 
					</li> 
					<li> 
						<h3>Clean Code</h3> 
						<img src= 
"https://5.imimg.com/data5/WZ/NH/HL/SELLER-99655515/clean-code-a-handbook-of-agile-software-craftsmanship-book-500x500.jpg"
							alt="Product 1"> 
						<p>A Handbook of Agile Software Craftsmanship</p> 
						<p><span>Rs.450</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="4"> 
							<label for="product4_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product4_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 			

					<li> 
						<h3>Indian Polity</h3> 
						<img src= 
"https://www.clearias.com/up/Indian-Polity-Laxmikanth-768x994.jpg"
							alt="Product 5"> 
						<p>Must read for UPSC</p> 
						<p><span>Rs.599</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="5"> 
							<label for="product5_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product5_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 		
					<li> 
						<h3>Think Like A Monk</h3> 
						<img src= 
"https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781982134488/think-like-a-monk-9781982134488_hr.jpg"
							alt="Product 5"> 
						<p>Train your mind for peace and purpose</p> 
						<p><span>Rs.270</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="6"> 
							<label for="product6_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product6_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 	
					<li> 
						<h3>Logicomix</h3> 
						<img src= 
"https://th.bing.com/th/id/OIP.fxa6DkofQ8FentgcLosePwHaKU?pid=ImgDet&rs=1"
							alt="Product 7"> 
						<p>Greek Graphic Novel</p> 
						<p><span>Rs.600</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="7"> 
							<label for="product7_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product7_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 		
					<li> 
						<h3>Deep Work</h3> 
						<img src= 
"https://th.bing.com/th/id/R.96ce48ad9de6ec1f3a0c47edea0142f7?rik=tO%2fNzTCN%2few%2f8w&riu=http%3a%2f%2fknowledge.wharton.upenn.edu%2fwp-content%2fuploads%2f2016%2f01%2fNewport_DeepWork_HC.jpg&ehk=nzqdgc3Ir2mvzmaPIN3yi1sg4%2buu%2fiXm7tr1sut1sl8%3d&risl=&pid=ImgRaw&r=0"
							alt="Product 8">
						<p>Rules for Focused Success</p> 
						<p><span>Rs.360</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="8"> 
							<label for="product8_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product8_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 		
					<li> 
						<h3>The Trust</h3> 
						<img src= 
"https://m.media-amazon.com/images/I/91U07JoeF+L._SY425_.jpg"
							alt="Product 9">
						<p>Mysterious Novel</p> 
						<p><span>Rs.999</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="9"> 
							<label for="product9_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product9_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 		
					<li> 
						<h3>I Dare!</h3> 
						<img src= 
"https://th.bing.com/th/id/R.86682c988441411d6ecdfef524a362bc?rik=3uk3kIrujMclfw&riu=http%3a%2f%2fwww.booksforyou.co.in%2fBookImage%2f1839_idare.Jpeg&ehk=rEFun67ix1eMaZpku4wQgYNDYZsB13TL8WpopB%2fgO98%3d&risl=&pid=ImgRaw&r=0"
							alt="Product 10">
						<p>Biography of IPS Kiran Bedi</p> 
						<p><span>Rs.399</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="10"> 
							<label for="product10_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product10_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 		
					<li> 
						<h3>Nutritional Guide</h3> 
						<img src= 
"https://m.media-amazon.com/images/I/81DwNnwJa6L._SY425_.jpg"
							alt="Product 11">
						<p>Steps to Reset your Health</p> 
						<p><span>Rs.470</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="11"> 
							<label for="product11_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product11_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 		

					<li> 
						<h3>R.D Sharma</h3> 
						<img src= 
"https://1.bp.blogspot.com/-2cLX_rxesDE/Xx4nSk9CWfI/AAAAAAAAAsA/IBmjVn-S5eUpfOoq1OyCcsBLRrvSPmIlwCLcBGAsYHQ/s500/r-d-sharma-maths-for-12th-std-cbse-500x500%2B%25281%2529.jpg"
							alt="Product 12">
						<p>Mathematics for Class XII</p> 
						<p><span>Rs.720</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="12"> 
							<label for="product12_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product12_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 		
					<li> 
						<h3>Master your Emotions</h3> 
						<img src= 
"https://rukminim1.flixcart.com/image/832/832/kgqvlow0/book/6/1/9/master-your-emotions-original-imafwwpudqkh3udc.jpeg?q=70"
							alt="Product 13">
						<p>Book to Balance your Emotions</p> 
						<p><span>Rs.250</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="13"> 
							<label for="product13_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product13_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 		

					<li> 
						<h3>Einstein</h3> 
						<img src= 
"https://th.bing.com/th/id/OIP.hl1jXebGR1wSgdP6J4X3IAHaLJ?pid=ImgDet&rs=1"
							alt="Product 14">
						<p>About Life of Albert Einstein</p> 
						<p><span>Rs.2999</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="14"> 
							<label for="product14_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product14_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 		
					<li> 
						<h3>Business Management</h3> 
						<img src= 
"https://pictures.abebooks.com/isbn/9780199059829-us.jpg"
							alt="Product 15">
						<p>Guide to the Beginners</p> 
						<p><span>Rs.770</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="15"> 
							<label for="product15_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product15_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 		
					<!-- Add forms for the other products here --> 
				</ul> 
			</section> 
		</main><center> 
		<footer> 
			<p>&copy; 2023 The BookShelf </p> 
		</footer> </center>
		<script src="shop.php"></script> 
	</body> 
</html>
