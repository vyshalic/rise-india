$(document).ready(function(){
	$(document).on('click', '.myModal', function(){
		var id=$(this).val();
                //window.alert(id);
                //var rowvideo=$('#rowvideo'+id).text();
		//window.alert(rowvideo); 
		$('#myModal').modal('show');
		$('#erowvideo').val(id);
                var video = document.getElementById('video');
                video.setAttribute("src", id);
                video.load();
		
	});
});



