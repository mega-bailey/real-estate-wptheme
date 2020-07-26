<form action="" method="get">

<label for="search" class="search-label">Search</label>

<input type="hidden" name="category" value="<?php the_search_query();?>" required>
<input type="text" name="s" id="search" value="<?php the_search_query();?>" class="search-box"  required>

<button type="submit" class="btn btn-info">Search</button>

</form>