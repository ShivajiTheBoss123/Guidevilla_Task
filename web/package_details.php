<?php
	extract($_GET);
	if(!isset($dtl) || empty($dtl)){
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>Company Name | Package </title>
<?php include 'header_b.php'; ?>
<link rel="stylesheet" href="css/package.css">
  	<div class="container" id="pinfo">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
					<img src="images/<?php echo $dtl; ?>.jpg" alt="">
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">₹1500 - 2 days 1 night</h3>
						<p>Exploring <span style="text-transform:uppercase"><?php echo $dtl; ?></span></p>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">his agreement describes your rights and the conditions upon which you may use the Windows software. You should review the entire agreement, including any supplemental license terms that accompany the software and any linked terms, because all of the terms are important and together create this agreement that applies to you. You can review linked terms by pasting the (aka.ms/) link into a browser window.
                        By accepting this agreement or using the software, you agree to all of these terms, and consent to the transmission of certain information during activation and during your use of the software as per the privacy statement described in Section 3. If you do not accept and comply with these terms, you may not use the software or its features. You may contact the device manufacturer or installer, or your retailer if you purchased the software directly, to determine its return policy and return the software or device for a refund or credit under that policy. You must comply with that policy, which might require you to return the software with the entire device on which the software is installed for a refund or credit, if anyz.</p>
						<h4 class="price">package price: <span>₹1500</span></h4>
						<p class="vote"><strong>91%</strong> of travler's enjoyed this Journey! <strong>(87 votes)</strong></p>
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">book now</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<br />
	<?php include 'packages_b.php'; ?>
	<!-- //About us -->	
<?php include 'footer.php'; ?>