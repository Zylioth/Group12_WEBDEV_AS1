function showPopup(message, type) {
  const popupBox = document.getElementById('popupBox');
  const popupMessage = document.getElementById('popupMessage');
  popupMessage.innerText = message;

  // Add a class based on the type (success or error)
  if (type === 'success') {
      popupBox.classList.add('success');
  } else {
      popupBox.classList.add('error');
  }

  popupBox.classList.remove('hidden');

  // Automatically hide the popup after 3 seconds
  setTimeout(function() {
      popupBox.classList.add('hidden');
      popupBox.classList.remove('success', 'error');
  }, 3000);
}
