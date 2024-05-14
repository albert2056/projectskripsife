function outfitDeletePopup() {
    if (confirm("Are you sure you want to delete this outfit?")) {
        alert("Outfit successfully deleted!");
    } else {
        alert("Deletion canceled.");
        event.preventDefault();
    }
}

function portfolioDeletePopup() {
    if (confirm("Are you sure you want to delete this portfolio?")) {
        alert("Portfolio successfully deleted!");
    } else {
        alert("Deletion canceled.");
        event.preventDefault();
    }
}

function packageDeletePopup() {
    if (confirm("Are you sure you want to delete this package?")) {
        alert("Package successfully deleted!");
    } else {
        alert("Deletion canceled.");
        event.preventDefault();
    }
}

function transactionDeletePopup() {
    if (confirm("Are you sure you want to delete this transaction?")) {
        alert("Transaction successfully deleted!");
    } else {
        alert("Deletion canceled.");
        event.preventDefault();
    }
}

function changeStatusPopup() {
    if (confirm("Are you sure you want to change this payment status?")) {
        alert("Payment status successfully changed!");
    } else {
        alert("Payment status change canceled.");
        event.preventDefault();
    }
}