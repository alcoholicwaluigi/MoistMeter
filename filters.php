<div class="filter-box">
    <div class="filter selected">
        <input  type="radio" name="filter_sort" value=""
                class="filter_btn" data-mc-filter-url="">
    </div>
    <div class="filter">
        <a href="<?php
            echo "search.php?search_term=".$search."&category=Movie";?>">
            <input  type="radio" name="filter_sort"
                class="filter_btn" data-mc-filter-url="">
        </a>
    </div>
    <div class="filter">
        <a href="<?php
            $search = mysqli_real_escape_string($conn, $_GET['search_term']); 
            echo "search.php?search_term=".$search."&category=Game";?>">
        <input  type="radio" name="filter_sort"
                class="filter_btn" data-mc-filter-url="" >   
        </a> 
    </div>
    <div class="filter">
        <input  type="radio" name="filter_sort" value="Movie"
                class="filter_btn" data-mc-filter-url="">  
    </div>
</div>