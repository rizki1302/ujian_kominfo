<!DOCTYPE html>
<html>
<head>
	<title>Ujian Tenaga Ahli</title>
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Judul Seo</th>
			<th>Hari<th>
			<th>Tanggal</th>
			<th>Gambar</th>
			<th>Dibaca</th>
		</tr>
		<tbody id="badan-tabel">
			
		</tbody>
	</thead>
</table>
<p id="test"></p>

<script type="text/javascript">
var test = "<tr>" ; 


$(document).ready(function(){
 $.getJSON('http://postkota.id/api', function(data) {

 	test += "<td>1</td>"; 
	test += "<td>"+data[0].judul+"</td>"; 
	test += "<td>"+data[0].judul_seo+"</td>";
	test += "<td>"+data[0].hari+"</td>";
	test += "<td>"+data[0].tanggal+"</td>";
	test += "<td>"+data[0].gambar+"</td>"; 
	test += "<td>"+data[0].dibaca+"</td>";    
	test += "</tr><tr>";
	test += "<td>2</td>"; 	
	test += "<td>"+data[1].judul+"</td>"; 
	test += "<td>"+data[1].judul_seo+"</td>";
	test += "<td>"+data[1].hari+"</td>";
	test += "<td>"+data[1].tanggal+"</td>";
	test += "<td>"+data[1].gambar+"</td>"; 
	test += "<td>"+data[1].dibaca+"</td>";    

test += "</tr><tr>";
	test += "<td>3</td>"; 
	test += "<td>"+data[2].judul+"</td>"; 
	test += "<td>"+data[2].judul_seo+"</td>";
	test += "<td>"+data[2].hari+"</td>";
	test += "<td>"+data[2].tanggal+"</td>";
	test += "<td>"+data[2].gambar+"</td>"; 
	test += "<td>"+data[2].dibaca+"</td>";   
test += "</tr><tr>";
test += "<td>4</td>"; 
		test += "<td>"+data[3].judul+"</td>"; 
	test += "<td>"+data[3].judul_seo+"</td>";
	test += "<td>"+data[3].hari+"</td>";
	test += "<td>"+data[3].tanggal+"</td>";
	test += "<td>"+data[3].gambar+"</td>"; 
	test += "<td>"+data[3].dibaca+"</td>";
	test += "</tr><tr>"; 
test += "<td>5</td>"; 
		test += "<td>"+data[4].judul+"</td>"; 
	test += "<td>"+data[4].judul_seo+"</td>";
	test += "<td>"+data[4].hari+"</td>";
	test += "<td>"+data[4].tanggal+"</td>";
	test += "<td>"+data[4].gambar+"</td>"; 
	test += "<td>"+data[4].dibaca+"</td>";
	test += "</tr><tr>";   
test += "<td>6</td>"; 
		test += "<td>"+data[5].judul+"</td>"; 
	test += "<td>"+data[5].judul_seo+"</td>";
	test += "<td>"+data[5].hari+"</td>";
	test += "<td>"+data[5].tanggal+"</td>";
	test += "<td>"+data[5].gambar+"</td>"; 
	test += "<td>"+data[5].dibaca+"</td>";
	test += "</tr><tr>";         
test += "<td>7</td>"; 
		test += "<td>"+data[6].judul+"</td>"; 
	test += "<td>"+data[6].judul_seo+"</td>";
	test += "<td>"+data[6].hari+"</td>";
	test += "<td>"+data[6].tanggal+"</td>";
	test += "<td>"+data[6].gambar+"</td>"; 
	test += "<td>"+data[6].dibaca+"</td>";    

test += "</tr>";
$('#badan-tabel').html( test
	);
		console.log(test);
	

  });

	
    
});
          
</script>
</body>

</html>