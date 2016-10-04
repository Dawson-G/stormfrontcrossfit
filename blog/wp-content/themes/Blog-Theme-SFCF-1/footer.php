<footer>
  <div class="content container-fluid">
    <div class="row">
      <div class="container">
        <div class="col-sm-4">
          <p>Made by Dawson Greeley.</p>
        </div><!-- col-sm-6 -->
        <div class="col-xs-8">
          <form class="form-horizontal" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
            	<div class="form-group">
            		<div class="col-sm-8">
            			<input type="text" class="form-control" id="s" name="s" placeholder="Search" value="<?php echo wp_specialchars($s, 1); ?>">
            		</div>
            		<div class="col-sm-4">
            			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
            		</div>
            	</div>
            </form>
          
        </div>
      </div>
    </div><!-- row -->
  </div><!-- content container -->
</footer>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/myscript.js"></script>

    <!-- Bootstrap JS -->
    <script src="/js/thirdparty/bootstrap.min.js"></script>
</body>
</html>
