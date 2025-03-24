function showPaymentDetails() {
    const paymentMethod = document.getElementById("payment-method").value;
    const paymentDetails = document.getElementById("payment-details");
    const cryptoDetails = document.getElementById("crypto-details");

    if (paymentMethod === "Cryptocurrency") {
        paymentDetails.style.display = "block";
        cryptoDetails.style.display = "block";
    } else if (paymentMethod) {
        paymentDetails.style.display = "block";
        cryptoDetails.style.display = "none";
    } else {
        paymentDetails.style.display = "none";
        cryptoDetails.style.display = "none";
    }
}

function validatePayment() {
    const paymentMethod = document.getElementById("payment-method").value;
    const paymentInfo = document.getElementById("payment-info").value;
    const paymentAmount = document.getElementById("payment-amount").value;
    const cryptoWallet = document.getElementById("crypto-wallet").value;
    const cryptoAmount = document.getElementById("crypto-amount").value;
    const cryptoExchangeRate = document.getElementById("crypto-exchange-rate").value;

    if (paymentMethod === "Mobile Money" && !/^(\+33|0)[67]\d{8}$/.test(paymentInfo)) {
        alert("Invalid MTN number. Please enter a valid MTN number.");
        return false;
    }

    if (paymentMethod === "Orange Money" && !/^(\+33|0)[67]\d{8}$/.test(paymentInfo)) {
        alert("Invalid Orange number. Please enter a valid Orange number.");
        return false;
    }

    if (paymentMethod === "Bank Transfer" && paymentInfo.trim() === "") {
        alert("Please enter your bank's name and number.");
        return false;
    }

    if (paymentMethod === "Cryptocurrency") {
        if (cryptoWallet.trim() === "" || paymentInfo.trim() === "" || cryptoAmount <= 0 || cryptoExchangeRate <= 0) {
            alert("Please enter your cryptocurrency wallet address, payment details, a valid amount, and a valid exchange rate.");
            return false;
        }
        if (isNaN(cryptoExchangeRate) || cryptoExchangeRate <= 0) {
            alert("Invalid exchange rate. Please enter a positive number.");
            return false;
        }
    }

    if (paymentAmount <= 0) {
        alert("Please enter a valid payment amount.");
        return false;
    }

    return true;
}