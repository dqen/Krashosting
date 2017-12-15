document.addEventListener("DOMContentLoaded", mystart);

    function mystart() {

        document.addEventListener("click",function PayPal() {
            document.getElementById("paypal");
            let txt;
            if (confirm("Press a button!") === true) {
                txt = "betaling afronden";
            } else {
                txt = "betaling afbreken";
            }
            document.getElementsByClassName("PayPal").innerHTML = txt;
        } )
    }