
// let mahasiswa = {
// 	nama : "Adhitya Sidiq Permana",
// 	nrp : "153040049",
// 	email : "adhitya.153040049@unpas.ac.id"
// }

// console.log(JSON.stringify(mahasiswa));


// with AJAX

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function() {
// 	if (xhr.readyState == 4 && xhr.status == 200) {
// 		let mahasiswa = JSON.parse(this.responseText);
// 		console.log(JSON.stringify(mahasiswa));
// 	}
// }

// xhr.open('GET', 'coba.json', true);
// xhr.send();

// with JQUERY

$.getJSON('coba.json', function(data){
	console.log(data);
});


