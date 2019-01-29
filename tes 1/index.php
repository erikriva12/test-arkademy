<script type="text/javascript">
var i, y, x = "";
var erik = {
	"name" : "Erik Riva Mahardika",
	"address" : "Batu",
	"hobbies" : ["Bersepeda","Nonton Anine","Main Game"],
	"married" : false,
	"school" : "SMK PGRI 03 Malang",
	"skills": [{"WEB": ["PHP", "html", "CSS"]}, {"DEKSTOP": ["Java"]}]
};
for (i in erik.hobbies) {
	x += erik.hobbies[i] + ", ";
}
if (erik.married == true) {
	y = "Menikah";
}
else{
	y = "Belum Menikah";
}

document.writeln("Nama :  " +erik.name+"<br>");
document.writeln("Alamat :  " +erik.address+"<br>");
document.writeln("Hobi :  " +x+"<br>");
document.writeln("Menikah :  " +y+"<br>");
document.writeln("Sekolah :  " +erik.school+"<br>");
document.writeln("Skill :  ");
for ( var a = 0; a < erik.skills.length; a++) {
		var obj = erik.skills[a];
		console.log(obj);
		for ( var key in obj) {
 			document.writeln(" - " + key);
 			document.writeln(":");
 			document.writeln(obj[key]);
 			document.writeln("&nbsp;");
		}
	}
</script>