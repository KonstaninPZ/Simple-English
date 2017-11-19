

window.onload = function () {
    document.getElementById("english_word").onchange = validatePassword;
    document.getElementById("russian_word").onchange = validatePassword;
}
function validatePassword(){
    var word1 = document.getElementById("english_word").value;
    var word2 = document.getElementById("russian_word").value;
    if(word1 == word2){
        document.getElementById("english_word").setCustomValidity("Error. Words  Match");
    }else
    if(word1 == "" ){
        document.getElementById("english_word").setCustomValidity("Error. Field english words is empty");
    }
//    else
//    if(word2 == ""){
//         document.getElementById("russian_word").setCustomValidity("Error.Field russian words is empty");
//    }
   // else
       // document.getElementById("english_words").setCustomValidity('');
//empty string means no validation error
}
