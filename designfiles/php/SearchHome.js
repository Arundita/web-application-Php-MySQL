function removeElement(parentDiv, childDiv){
if (childDiv == parentDiv){
alert("The parent div cannot be removed.");
}
else if (document.getElementById(childDiv)){
var child = document.getElementById(childDiv);
var parent = document.getElementById(parentDiv);
parent.removeChild(child);
}
else{
alert("Child div has already been removed or does not exist.");
return false;
}
}

function ResultHome(){
	
	
var r = document.createElement('span');
var a = document.createElement("INPUT");
a.setAttribute("type", "text");
r.appendChild(a);
document.getElementById("STARTDATE").appendChild(r);

var S = document.createElement('span');
var b = document.createElement("INPUT");
b.setAttribute("type", "text");
s.appendChild(b);
document.getElementById("ENDDATE").appendChild(s);

var t = document.createElement('span');
var c = document.createElement("INPUT");
c.setAttribute("type", "text");
t.appendChild(c);
document.getElementById("INSURANCESTATUS").appendChild(t);

var u = document.createElement('span');
var d = document.createElement("INPUT");
d.setAttribute("type", "number");
u.appendChild(d);
document.getElementById("PREMIUMAMOUNT").appendChild(u);

var v = document.createElement('span');
var e = document.createElement("INPUT");
e.setAttribute("type", "number");
v.appendChild(e);
document.getElementById("INSURANCEID").appendChild(v);

}


