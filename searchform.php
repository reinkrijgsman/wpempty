      <form action="<?php bloginfo('url'); ?>/" method="get" class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <span class="navbar-search fa fa-search"></span>
          <input type="text" name="s" class="form-control" value="<?php the_search_query(); ?>" placeholder="Search for everything...">
        </div>
        <!-- <button type="submit" class="btn btn-default">Submit</button> -->
      </form>
