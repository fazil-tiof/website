<form action="/" method="get" class="/echo/">
	<input type="hidden" name="cat" value="4">
	<input type="text" name="s" value="<?php the_search_query(); ?>" required>
	<button type="submit">go</button>
</form>