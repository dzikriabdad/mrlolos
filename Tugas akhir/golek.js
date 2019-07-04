function ngolek(){
	var ketik = document.google.keyword.value;//menangkap kata dari form golek input
	 var jadi="https://www.google.com/search?q"+ketik;//pendeklarasian var hasil dari ketik
	 if (ketik=="") {//ini jika tidak di isi akan ada alret

	 	alert('you must type something');
	 }
	 else{//jika di isi maka langsung buka ke google
	 	window.open(jadi,'google',config='height=550, width=750, scrollbar=yes location=yes')
	 }
}