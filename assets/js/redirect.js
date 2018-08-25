(function(){
	$(document).load(function(){
   $("a[href$='"+location.hash.slice(1)+"']").click()
	});
})();