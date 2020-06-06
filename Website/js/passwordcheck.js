//Author- Jibin_Thomas
// For password validtion 


function check() {

    var p1 , p2;

    p1 = document.getElementById('p_pass1').value;

    p2 = document.getElementById('p_pass2').value;

    if (p1 !== p2)
        document.getElementById('para').innerHTML = "Password not Entered Correctly";

}
