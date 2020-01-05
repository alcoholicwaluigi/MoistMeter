<div class="filter-box">
    <div class="filter selected">
        <a href="
            <?php
            $search = mysqli_real_escape_string($conn, $_GET['search_term']); 
            echo "search.php?search_term=".$search."&category=";
            ?>">
            <label>All</label>
        </a> 
    </div>
    <div class="filter">
        <a href="
            <?php
            $search = mysqli_real_escape_string($conn, $_GET['search_term']); 
            echo "search.php?search_term=".$search."&category=movie";
            ?>">
            <label>Movies</label>
        </a> 
    </div>
    <div class="filter">
        <a href="
            <?php
            $search = mysqli_real_escape_string($conn, $_GET['search_term']); 
            echo "search.php?search_term=".$search."&category=game";
            ?>">
            <label>Games</label>
        </a>  
    </div>
    <div class="filter">
        <a href="
            <?php
            $search = mysqli_real_escape_string($conn, $_GET['search_term']); 
            echo "search.php?search_term=".$search."&category=music";
            ?>">
            <label>Music</label>
        </a> 
    </div>
</div>