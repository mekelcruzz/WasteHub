document.addEventListener("DOMContentLoaded", function () {
    const subscribeForm = document.getElementById("subscribeForm");
  
    subscribeForm.addEventListener("submit", function (event) {
      event.preventDefault();
  
      setTimeout(function () {
        document.getElementById('emailInput').value = '';
      }, 500);
  
      window.scrollTo({ top: 0, behavior: 'smooth' });
  
      const formData = new FormData(subscribeForm);
      const xhr = new XMLHttpRequest();
  
      xhr.open("POST", "subscribe.php", true);
  
      xhr.onload = function () {
        if (xhr.status === 200) {
          console.log(xhr.responseText);
        } else {
          console.error("Error: " + xhr.statusText);
        }
      };
  
      xhr.send(formData);
    });
  });
  