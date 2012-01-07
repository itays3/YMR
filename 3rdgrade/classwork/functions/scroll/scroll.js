
		  $(function(){
			  $('#test1a').slimscroll({
				
				  height: '80%',
				  start: $('#testElement'),
				  alwaysVisible: true,
			  });

			  //multiple elemenets
			  $('.multi').slimScroll({
				  height: '250px',
				  width: '200px'
			  });
			  $('#testrailvisible').slimscroll({
				  width: '300px',
				  railVisible: true
			  });
			  $('#testrailalwaysvisible').slimscroll({
				  width: '300px',
				  railVisible: true,
				  alwaysVisible: true,
				  railColor: '#f00',
				  opacity: 1,
				  color: '#333'
			  });			  
			  //no initial content

			  
		  });
