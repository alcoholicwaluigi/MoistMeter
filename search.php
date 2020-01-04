<?php
	include 'header.php';
?>
<div id = "layout">
	<div id = "separator"></div>
	<div id = "navigation_bar">
		<?php
			include 'navigation.html'
		?>
	<div id = "content">
		<div class = "search-wrapper">
			<?php
				$search = mysqli_real_escape_string($conn, $_POST['search_term']);
				$sql = "SELECT * FROM article WHERE a_title LIKE '%$search%'";
				$result = mysqli_query($conn, $sql);
				$queryResult = mysqli_num_rows($result);
				
				echo '<div class = "search-result-header column header">
								<h2 id = "search-header"> Search Results for <b>"'.$search.'"</b></h2>
							</div>
							<div class = "search-result-filters column filter">
								hi
							</div>';
				
				if($queryResult > 0){
					echo '<div class = "search-results column list">
									<ul>';
						while ($row = mysqli_fetch_assoc($result)){
							echo '<li>
										<div class = "article-box">
											<div class = "article-stats">
												<h3 class = "article-title">
													<a href = "article.php?title='.$row['a_title'].'">
													'.$row['a_title'].'
													</a>
												</h3>
												</a>
												<p>'.$row['a_genre'].', '.$row['a_date'].'</p>
											</div>
											<p class = "article-description">'.$row['a_text'].'</p>
										</div>
										</li>';
						}
								'	<ul>
							</div>';
				} else {
					echo "There are no results matching your search";
				}
			?>
		</div>
	</div>