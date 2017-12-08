function PayPal() {
        let txt;
        if (confirm("Press a button!") == true) {
            txt = "You pressed OK!";
        } else {
            txt = "You pressed Cancel!";
        }
        document.getElementsByClassName("PayPal").innerHTML = txt;
    }