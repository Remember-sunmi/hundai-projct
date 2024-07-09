function showPopup(imgElement) {
  var popup = imgElement.parentElement.querySelector('.popup');
  var popupImage = popup.querySelector('.popupImage');
  var popupTitle = popup.querySelector('.popupText h4');
  var popupDescription = popup.querySelector('.popupText p');

  popupImage.src = imgElement.src;
  popupImage.alt = imgElement.alt;
  popupTitle.textContent = imgElement.nextElementSibling.querySelector('h4').textContent;
  popupDescription.innerHTML = imgElement.nextElementSibling.querySelector('p').innerHTML;

  hideAllPopups();
  popup.style.display = 'block';
  document.getElementById('popupOverlay').style.display = 'block';

  // 이미지 클릭 시 팝업 창 닫기
  popupImage.addEventListener('click', function() {
    hidePopup();
  });
}

function hidePopup() {
  hideAllPopups();
  document.getElementById('popupOverlay').style.display = 'none';
}

function hideAllPopups() {
  var popups = document.querySelectorAll('.popup');
  popups.forEach(function(popup) {
      popup.style.display = 'none';
  });
}
