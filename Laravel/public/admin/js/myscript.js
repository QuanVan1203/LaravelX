 $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
 $("div.alert").delay(3000).slideUp();

 function xacNhanXoa(msg){
 	if(window.confirm(msg)){
 		return true;
 	}
 	return false;
 }