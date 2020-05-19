<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">

  <label for="search">Search</label>
  <!-- name has to be s so that wordpress knows this is a search functionality -->
  <input type="text" name="s" id="search" value="<?php the_search_query();?>" required>
  <button type="submit">Search</button>

</form>