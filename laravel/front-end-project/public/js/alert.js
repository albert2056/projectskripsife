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

