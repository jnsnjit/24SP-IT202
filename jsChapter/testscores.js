let score = 0
const score_array = [];

do{
    score = parseInt(prompt("enter a test score, or enter -1 to end array of test scores"));
    if(score >=0 && score <=100){
        score_array[score_array.length] = score;
    }else if(score !=-1){
        alert("Score must be a valid number from 1-100");
    }

} while (score != -1){
    if(score_array.length >0){
        for(let index in score_array){
            document.write(`Score ${index}: ${score_array[index]}`);
            document.write("<br>");
        }
    }
}
let score_total = 0;
for(let score of score_array){
    score_total += score
}

score_total = score_total/score_array.length;
document.write("Average Score: " + score_total.toFixed(2));
document.write("<br>");