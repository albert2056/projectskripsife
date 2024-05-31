function validatePortfolioForm() {
    var coupleName = document.getElementById("name").value;
    var eventDate = document.getElementById("eventDate").value;
    var image = document.getElementById("image").value;
    var outfitNamePort = document.getElementById("gownName").value;
    var venue = document.getElementById("venue").value;
    
    if (coupleName.trim() == '' || eventDate.trim() == '' || image.trim() == '' || outfitNamePort.trim() == '' || venue.trim() == '') {
        alert("Harap isi semua kolom dengan valid.");
        return false;
    }

    var selectedDate = new Date(eventDate);
    var today = new Date();
    
    if (selectedDate > today) {
        alert("Tanggal pernikahan tidak boleh lebih dari hari ini!");
        return false;
    }
    
    return true;
}

function validateOutfitForm() {
    var outfitName = document.getElementById("name").value;
    var outfitCategory = document.getElementById("outfitCategoryId").value;
    var outfitQuantity = document.getElementById("qty").value;
    var outfitImage = document.getElementById("image").value;
    
    if (outfitName.trim() == '' || outfitCategory.trim() == '' || outfitQuantity.trim() == '' || outfitImage.trim() == '') {
        alert("Harap isi semua kolom dengan valid.");
        return false;
    }
    
    return true;
}

//package
function formatPrice(input) {
    // Remove non-digit characters
    let unformattedValue = input.value.replace(/\D/g, '');
    // Format the value
    let formattedValue = unformattedValue.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    // Set formatted value to visible input field
    input.value = formattedValue;
    // Set unformatted value to hidden input field
    document.getElementById('price').value = unformattedValue;
}

function validatePackageForm() {
    var packageName = document.getElementById("name").value;
    var packagePrice = document.getElementById("price_formatted").value;
    var packageDescription = document.getElementById("description").value;
    
    if (packageName.trim() == '' || packagePrice.trim() == '' || packageDescription.trim() == '') {
        alert("Harap isi semua kolom dengan valid.");
        return false;
    }
    
    return true;
}


//book
function validateBookForm() {
    var name = document.getElementById("name").value;
    var totalUsher = document.getElementById("totalUsher").value;
    var eventDate = document.getElementById("eventDate").value;
    var venue = document.getElementById("venue").value;
    
    if (name.trim() == '' || totalUsher.trim() == '' || eventDate.trim() == '' || venue.trim() == '') {
        alert("Harap isi semua kolom dengan valid.");
        return false;
    }

    var selectedDate = new Date(eventDate);
    var today = new Date();
    
    if (selectedDate < today) {
        alert("Tanggal pernikahan harus lebih dari hari ini!");
        return false;
    }
    
    return true;
}


// register
function validateRegisterForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var password = document.getElementById("password").value;

    if (typeof name !== 'string' || name === "" || email === "" || phone === "" || password === "") {
        alert("Harap isi semua kolom registrasi dengan valid.");
        return false;
    } else if (!isValidEmail(email)) {
        alert("Masukkan alamat email yang valid.");
        return false;
    } else if (isNaN(phone) || phone.length < 10) {
        alert("Panjang nomor telepon minimal 10 karakter dan harus berupa angka.");
        return false;
    } else {
      try {
        if (!validatePassword(password)) {
            return;
        }
      } catch (error) {
            alert(error.message);
            return;
      }

      document.getElementById("registrationForm").submit(); 
    }
    return true;
  }

  function isValidEmail(email) {
        return /\b[A-Za-z0-9._%+-]+@(?:[A-Za-z0-9-]+\.)+[A-Za-z]{2,}\b/.test(email) &&
        (email.includes(".com") || email.includes(".co.id"));
  }

  function validatePassword(password) {
    if (password.length < 8) {
        throw new Error("Password harus terdiri dari minimal 8 karakter.");
    }
    if (!/[A-Z]/.test(password)) {
        throw new Error("Password harus terdiri dari minimal 8 karakter.");
    }
    if (!/[a-z]/.test(password)) {
        throw new Error("Password harus terdiri dari setidaknya satu huruf kecil.");
    }
    if (!/\d/.test(password)) {
        throw new Error("Password harus terdiri dari setidaknya satu angka.");
    }
    return true;
  }

  function validateLoginForm() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    
    if (!email || !emailPattern.test(email)) {
      alert('Masukkan alamat email yang valid.');
      return false;
    }
  
    if (!password) {
      alert('Masukkan kata sandi Anda.');
      return false;
    }
  
    return true;
  }
  