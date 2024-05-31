function outfitDeletePopup() {
    if (confirm("Apakah Anda yakin ingin menghapus busana ini?")) {
        alert("Busana berhasil dihapus!");
    } else {
        alert("Penghapusan dibatalkan.");
        event.preventDefault();
    }
}

function outfitCreateSuccessPopup() {
    alert("Berhasil menambahkan busana!")
}

function outfitUpdateSuccessPopup() {
    alert("Berhasil meng-update busana!")
}

function portfolioDeletePopup() {
    if (confirm("Apakah Anda yakin ingin menghapus portofolio ini?")) {
        alert("Portfolio berhasil dihapus!");
    } else {
        alert("Penghapusan dibatalkan.");
        event.preventDefault();
    }
}

function portfolioCreateSuccessPopup() {
    alert("Berhasil menambahkan portfolio!")
}

function portfolioUpdateSuccessPopup() {
    alert("Berhasil meng-update portfolio!")
}

function packageDeletePopup() {
    if (confirm("Apakah Anda yakin ingin menghapus paket ini?")) {
        alert("Paket berhasil dihapus!");
    } else {
        alert("Penghapusan dibatalkan.");
        event.preventDefault();
    }
}

function packageCreateSuccessPopup() {
    alert("Berhasil menambahkan paket!")
}

function packageUpdateSuccessPopup() {
    alert("Berhasil meng-update paket!")
}

function transactionDeletePopup() {
    if (confirm("Apakah Anda yakin ingin menghapus transaksi ini?")) {
        alert("Transaksi berhasil dihapus!");
    } else {
        alert("Penghapusan dibatalkan.");
        event.preventDefault();
    }
}

function changeStatusPopup() {
    if (confirm("Apakah Anda yakin ingin mengubah status pembayaran ini?")) {
        alert("Status pembayaran berhasil diubah!");
    } else {
        alert("Perubahan status pembayaran dibatalkan.");
        event.preventDefault();
    }
}

function successfullyRegisterPopup() {
    alert("Berhasil melakukan registrasi akun!")
}

function successfullyLoginPopup() {
    alert("Berhasil melakukan Login!")
}

function successfullyBook() {
    alert("Berhasil melakukan pemesanan!")
}

function validateAndSubmitFormOutfitCreate() {
    if (validateOutfitForm()) {
        outfitCreateSuccessPopup();
        return true;
    } else {
        return false;
    }
}

function validateAndSubmitFormPackageCreate() {
    if (validatePackageForm()) {
        packageCreateSuccessPopup();
        return true;
    } else {
        return false;
    }
}

function validateAndSubmitFormPortfolioCreate() {
    if (validatePortfolioForm()) {
        portfolioCreateSuccessPopup();
        return true;
    } else {
        return false;
    }
}

function validateAndSubmitFormOutfitUpdate() {
    if (validateOutfitForm()) {
        outfitUpdateSuccessPopup();
        return true;
    } else {
        return false;
    }
}

function validateAndSubmitFormPackageUpdate() {
    if (validatePackageForm()) {
        packageUpdateSuccessPopup();
        return true;
    } else {
        return false;
    }
}

function validateAndSubmitFormPortfolioUpdate() {
    if (validatePortfolioForm()) {
        portfolioUpdateSuccessPopup();
        return true;
    } else {
        return false;
    }
}