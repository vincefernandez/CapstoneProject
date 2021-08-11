n = new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = m + "/" + d + "/" + y;

// random words
(function newFact() {

    word1 = "Good day and have fun";
    word2 = "Kain kana godbless";
    word3 = "Awit Sayo pre";
    word4 = "Try to be a rainbow in someone's cloud.";
    word5 = "Do good and good will come to you.";
    word6 = "A positive mindset brings positive things.";
    word7 = "Positivity always wins";
    word8 = "When things go wrong, don't go with them.";
    const words = [word1, word2, word3, word4, word5, word6, word7, word8];
    const randomFact = Math.floor(Math.random() * words.length);
    document.getElementById('factDisplay').innerHTML = words[randomFact];
})();


$(document).ready(function() {


    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.avatar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


    $(".file-upload").on('change', function() {
        readURL(this);
    });
});