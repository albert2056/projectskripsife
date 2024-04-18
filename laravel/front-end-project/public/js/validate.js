function validatePortfolioForm() {
    var coupleName = document.getElementById("coupleName").value;
    var eventDate = document.getElementById("eventDate").value;
    var image = document.getElementById("image").value;
    var outfitNamePort = document.getElementById("outfitNamePort").value;
    var venue = document.getElementById("venue").value;
    
    if (coupleName.trim() == '' || eventDate.trim() == '' || image.trim() == '' || outfitNamePort.trim() == '' || venue.trim() == '') {
        alert("Please fill in all fields.");
        return false;
    }
    
    return true;
}

function validateOutfitForm() {
    var outfitName = document.getElementById("outfitName").value;
    var outfitCategory = document.getElementById("outfitCategory").value;
    var outfitQuantity = document.getElementById("outfitQuantity").value;
    var outfitImage = document.getElementById("outfitImage").value;
    
    if (outfitName.trim() == '' || outfitCategory.trim() == '' || outfitQuantity.trim() == '' || outfitImage.trim() == '') {
        alert("Please fill in all fields.");
        return false;
    }
    
    return true;
}

//package
function formatPrice(input) {
    let value = input.value.replace(/\D/g, '');
    value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    input.value = value;
}

function validatePackageForm() {
    var packageName = document.getElementById("packageName").value;
    var packagePrice = document.getElementById("packagePrice").value;
    var packageDescription = document.getElementById("packageDescription").value;
    
    if (packageName.trim() == '' || packagePrice.trim() == '' || packageDescription.trim() == '') {
        alert("Please fill in all fields.");
        return false;
    }
    
    return true;
}