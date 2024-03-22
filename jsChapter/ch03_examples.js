let lastName =  "Hopper";
if(lastName == "Hopper"){
    console.log("My last name is Hopper");
}else{
    console.log("My last name is not Hopper")
}
let age = prompt("What is your age?");
if (age >= 18){
    alert("You may vote");
}else{
    alert("you are not old enough to vote");
}

let years = parseInt(prompt("enter number of years"));
while (isNaN(years) || years <= 0){
    console.log("years: " + years);
    years = parseInt(prompt("Years must be a valid positive integer"));
}

for(let count =3;count > 0; count--){
    document.write(count + "...");
}
document.write("Blast OFF!");
document.write("<br>");

const totals = [];
console.log("length: " + totals.length);
totals[0] = 141.95;
totals[1] = "Jimmy";
console.log("length: " + totals.length);

for (let index in totals){
    console.log("hi");
}

for(let value of totals){
    document.write("total is " + value);
    document.write("<br>");
}