function encodeEmail(email, key) {
    // Hex encode the key
    var encodedString = key.toString(16);

    // loop through every character in the email
    for(var n=0; n < email.length; n++) {

        // Get the code (in decimal) for the nth character
        var charCode = email.charCodeAt(n);

        // XOR the character with the key
        var encoded = charCode ^ key;

        // Hex encode the result, and append to the output string
        encodedString += encoded.toString(16);
    }
    return encodedString;
}

function decodeEmail(encodedString) {
    // Holds the final output
    var email = ""; 

    // Extract the first 2 letters
    var keyInHex = encodedString.substr(0, 2);

    // Convert the hex-encoded key into decimal
    var key = parseInt(keyInHex, 16);

    // Loop through the remaining encoded characters in steps of 2
    for (var n = 2; n < encodedString.length; n += 2) {

        // Get the next pair of characters
        var charInHex = encodedString.substr(n, 2)

        // Convert hex to decimal
        var char = parseInt(charInHex, 16);

        // XOR the character with the key to get the original character
        var output = char ^ key;

        // Append the decoded character to the output
        email += String.fromCharCode(output);
    }
    return email;
}
// Find all the elements on the page that use class="eml-protected"
var allElements = document.getElementsByClassName("eml-protected");

// Loop through all the elements, and update them
for (var i = 0; i < allElements.length; i++) {
    updateAnchor(allElements[i])
}

function updateAnchor(el) {
    // fetch the hex-encoded string
    var encoded = el.innerHTML;

    // decode the email, using the decodeEmail() function from before
    var decoded = decodeEmail(encoded);

    // Replace the text (displayed) content
    el.textContent = decoded;

    // Set the link to be a "mailto:" link
    el.href = 'mailto:' + decoded;
}

// $(function decodeEmail() {
//     var encodedString = $(".eml-protected").text();
//     // alert($encodedString);

//     // Holds the final output
//     var email = "";

//     // Extract the first 2 letters
//     var keyInHex = encodedString.substr(0, 2);

//     // Convert the hex-encoded key into decimal
//     var key = parseInt(keyInHex, 16);

//     // Loop through the remaining encoded characters in steps of 2
//     for (var n = 2; n < encodedString.length; n += 2) {

//         // Get the next pair of characters
//         var charInHex = encodedString.substr(n, 2)

//         // Convert hex to decimal
//         var char = parseInt(charInHex, 16);

//         // XOR the character with the key to get the original character
//         var output = char ^ key;

//         // Append the decoded character to the output
//         email += String.fromCharCode(output);

//     }
//     // return email;
//     // alert(email)
//     // $(".eml-protected").attr("text", email );
//     $(".eml-protected").text(email);
// });